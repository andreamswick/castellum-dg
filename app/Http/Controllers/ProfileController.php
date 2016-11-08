<?php

namespace App\Http\Controllers;

use App\VolunteerCategories;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('users.show', [
            'user' => Auth::user(),
            'profile' => true,
            'volunteer_categories' => VolunteerCategories::pluck('name', 'id')
        ]);
    }

}
