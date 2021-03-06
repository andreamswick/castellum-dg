<?php

namespace App\Http\Controllers;

use App\User;
use App\VolunteerCategories;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        return view('users.show', [
            'user' => $user,
            'profile' => (Auth::user()->id === $user->id) ? true : false,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user,
            'volunteer_categories' => VolunteerCategories::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param User                      $user
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name'  => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user->update($request->all());

        if($request->has('volunteer_categories')) {
            $user->volunteer_categories()->sync($request->volunteer_categories);
        }

        flash($user->name . ' updated successfully', 'success');

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Auth::user()->hasRole('admin')) {
            $user->delete();

            flash('User deleted.', 'success');
        } else {
            flash('You must be an admin to do that.', 'error');
        }

        return redirect('/users');
    }

    public function makeAdmin(User $user)
    {
        if (Auth::user()->hasRole('admin')) {
            $user->assignRole('admin');

            flash($user->name . ' was given admin permissions.', 'success');
        } else {
            flash('You must be an admin to do that.', 'error');
        }

        return redirect('/users');
    }
}
