<?php

namespace App\Http\Controllers;

use App\Documentation;
use App\VolunteerCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\DomCrawler\Crawler;
use App\Http\Requests;

class DocsController extends Controller
{
    /**
     * The documentation repository.
     *
     * @var Documentation
     */
    protected $docs;

    /**
     * Create a new controller instance.
     *
     * @param  Documentation $docs
     */
    public function __construct(Documentation $docs)
    {
        $this->docs = $docs;
    }

    public function volunteer()
    {
        return view('docs.volunteer', [
            'volunteer_categories' => VolunteerCategories::all(),
            'index'          => $this->docs->getIndex(),
            'admin_index'    => $this->docs->getAdminIndex(),
        ]);
    }

    /**
     * Show the root documentation page (/docs).
     *
     * @return Response
     */
    public function showRootPage()
    {
        return redirect('docs/quickstart');
    }

    /**
     * Show a documentation page.
     *
     * @param  string|null $page
     * @return Response
     */
    public function show($page = null)
    {
        $sectionPage = $page ?: 'quickstart';
        $content = $this->docs->get($sectionPage);

        if (is_null($content)) {
            abort(404);
        }

        $title = (new Crawler($content))->filterXPath('//h1');

        $section = '';

        if ($this->docs->sectionExists($page)) {
            $section .= '/' . $page;
        } elseif (!is_null($page)) {
            return redirect('/docs/quickstart');
        }
        $canonical = null;
        if ($this->docs->sectionExists($sectionPage)) {
            $canonical = 'docs/' . $sectionPage;
        }

        return view('docs.show', [
            'title'          => count($title) ? $title->text() : null,
            'content'        => $content,
            'currentSection' => $section,
            'canonical'      => $canonical,
            'page'           => $page,
            'index'          => $this->docs->getIndex(),
            'admin_index'    => $this->docs->getAdminIndex(),
        ]);
    }

    public function create()
    {
        return view('docs.create', [
            'index'       => $this->docs->getIndex(),
            'admin_index' => $this->docs->getAdminIndex(),
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $clean = str_replace(' ', '-', strtolower($request->file_name));
        $this->docs->save($clean, $request->docs_content);

        flash('Successfully created page, now remember to add it to a links section.', 'success');
        return redirect('docs/' . $request->file_name);
    }

    public function edit($page)
    {
        $content = $this->docs->get($page, false);

        return view('docs.edit', [
            'page'        => $page,
            'content'     => $content,
            'index'       => $this->docs->getIndex(),
            'admin_index' => $this->docs->getAdminIndex(),
        ]);
    }

    public function update($page, Request $request)
    {
        $this->docs->save($page, $request->docs_content);

        Cache::flush();
        $page = ($page === 'index' || $page === 'admin_index') ? 'quickstart' : $page;
        return redirect('docs/' . $page);
    }
}
