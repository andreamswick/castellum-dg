<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        $purchased_count = Item::purchased_count();
        $needed_count = Item::needed_count();

        return view('items.index', compact('items', 'purchased_count', 'needed_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name', 'id');
        $users->prepend('Not purchased yet.');

        return view('items.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required',
            'description' => 'required',
            'priority'    => 'required',
        ]);

        $item = Item::create($request->all());

        flash($item->title . ' was created!', 'success');

        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param Item $item
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Item $item
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $users = User::pluck('name', 'id');
        $users->prepend('Not purchased yet.');

        return view('items.edit', compact('item', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Item                      $item
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $this->validate($request, [
            'title'       => 'required',
            'description' => 'required',
            'priority'    => 'required',
        ]);

        $item->update($request->all());

        if ($request->user_id === "0") {
            $item->user_id = null;
        }
        else {
            $item->user_id = $request->user_id;
            $item->save();
        }

        $item->save();
        flash($item->title . ' updated successfully', 'success');

        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Item $item
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        if (Auth::user()->hasRole('admin')) {
            $item->delete();

            flash('Item deleted.', 'success');
        } else {
            flash('You must be an admin to do that.', 'error');
        }

        return redirect('/items');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (Auth::user()->hasRole('admin')) {
            Item::withTrashed()->where('id', $id)->restore();

            flash('Item restored.', 'success');
        } else {
            flash('You must be an admin to do that.', 'error');
        }

        return redirect('/trash-bin');
    }

    public function purchased(Item $item)
    {
        if (Auth::check()) {
            // The user is logged in...
            $item->user_id = Auth::user()->id;
            $item->save();

            flash($item->title . ' was purchased by ' . Auth::user()->name, 'success');

            return redirect('/items');
        } else {

            flash('You must login before marking an item as purchased.', 'error');

            return redirect('/login');
        }
    }
}
