<?php
namespace App;

use App\Events\DocsChanged;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Cache\Repository as Cache;

class Documentation
{
    /**
     * The filesystem implementation.
     *
     * @var Filesystem
     */
    protected $files;
    /**
     * The cache implementation.
     *
     * @var Cache
     */
    protected $cache;

    /**
     * Create a new documentation instance.
     *
     * @param  Filesystem $files
     * @param  Cache $cache
     */
    public function __construct(Filesystem $files, Cache $cache)
    {
        $this->files = $files;
        $this->cache = $cache;
    }

    /**
     * Get the documentation index page.
     *
     * @param  string $version
     * @return string
     */
    public function getIndex()
    {
        return $this->cache->remember('docs.index', 5, function () {
            $path = base_path('resources/docs/index.md');
            if ($this->files->exists($path)) {
                return markdown($this->files->get($path));
            }
            return null;
        });
    }

    public function getAdminIndex()
    {
        return $this->cache->remember('docs.admin_index', 5, function () {
            $path = base_path('resources/docs/admin_index.md');
            if ($this->files->exists($path)) {
                return markdown($this->files->get($path));
            }
            return null;
        });
    }

    /**
     * Get the given documentation page.
     *
     * @param  string $page
     * @param bool $markdown
     * @return string
     */
    public function get($page, $markdown = true)
    {
        if ($markdown) {
            return $this->cache->remember('docs.' . $page, 5, function () use ($page) {
                $path = base_path('resources/docs/' . $page . '.md');
                if ($this->files->exists($path)) {
                    return markdown($this->files->get($path));
                }
                return null;
            });
        }

        return $this->files->get(base_path('resources/docs/' . $page . '.md'));

    }

    /**
     * Check if the given section exists.
     *
     * @param  string $page
     * @return boolean
     * @return boolean
     */
    public function sectionExists($page)
    {
        return $this->files->exists(
            base_path('resources/docs/' . $page . '.md')
        );
    }

    public function save($page, $content)
    {
        $path = base_path('resources/docs/' . $page . '.md');
        event(new DocsChanged($page));
        return $this->files->put($path, $content);
    }

}
