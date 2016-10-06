<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use App\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $items = Item::where('user_id', null)->get();

        return view('home', compact('items', 'visits'));
    }

    public function trash()
    {
        if(Auth::user()->hasRole('admin')) {
            $visits = Visit::onlyTrashed()->get();
            $items = Item::onlyTrashed()->get();

            return view('trash', compact('visits', 'items'));
        }
        else {
            flash('You must be an admin to do that.', 'error');
        }
    }
}
