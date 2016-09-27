<?php

namespace App\Http\Controllers;

use App\Item;
use App\Visit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visits = Visit::all();
        $items = Item::all();
        return view('home', compact('items', 'visits'));
    }
}
