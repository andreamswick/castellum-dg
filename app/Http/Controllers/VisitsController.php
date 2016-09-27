<?php

namespace App\Http\Controllers;

use App\User;
use App\Visit;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class VisitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visits = Visit::all();
        return view('visits.index', compact('visits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name', 'id');
        return view('visits.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'start' => 'required',
            'end'   => 'required',
            'name'  => 'required',
        ]);

        $visit= Visit::create($request->all());

        flash($visit->name . ' was created!', 'success');

        return redirect('/visits');
    }

    /**
     * Display the specified resource.
     *
     * @param Visit $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        return view('visits.show', compact('visit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Visit $visit
     * @return \Illuminate\Http\Response
     */
    public function edit(Visit $visit)
    {
        $users = User::pluck('name', 'id');
        return view('visits.edit', compact('visit', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Visit $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
        $this->validate($request, [
            'start' => 'required',
            'end'   => 'required',
            'name'  => 'required',
        ]);

        $visit->update($request->all());

        $visit->save();
        flash($visit->name . ' updated successfully', 'success');

        return redirect('/visits');
    }

    /**
     * Remove the specified resource from storage.
     * @param Visit $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        $visit->delete();

        flash('Visit deleted.', 'success');

        return redirect('/visits');
    }

}
