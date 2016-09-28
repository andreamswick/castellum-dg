<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use App\Visit;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Visit $visit
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Visit $visit)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);

        $visit->comments()->create([
            'body'      => $request->body,
            'user_id'   => Auth::user()->id,
            'parent_id' => $request->parent_id,
        ]);

        flash('Comment was created!', 'success');

        return redirect("/visits/$visit->id");
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

        $visit->users()->sync($request->user_id);

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
