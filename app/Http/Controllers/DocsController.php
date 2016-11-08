<?php

namespace App\Http\Controllers;

use App\VolunteerCategories;
use Illuminate\Http\Request;

class DocsController extends Controller
{
    //

    public function volunteer()
    {
        return view('docs.volunteer', [
            'volunteer_categories' => VolunteerCategories::all(),
        ]);
    }
}
