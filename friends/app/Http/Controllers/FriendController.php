<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sortBy = $request->query('sortBy') ?? 'last_name';
        $direction = $request->query('direction') ?? 'asc';
        $friends = \App\Models\Friend::query()->orderBy($sortBy, $direction);
        return view('friends.index', ['friends' => $friends->paginate(25)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $friend = new \App\Models\Friend;
        return view('friends.create', ['friend' => $friend]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        \App\Models\Friend::create($this->validatedData($request));

        // Valid and Created
        return redirect()->route('friends.index')->with('success', 'Friend was created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $friend = \App\Models\Friend::findOrFail($id);
        return view('friends.show', ['friend' => $friend]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $friend = \App\Models\Friend::findOrFail($id);
        return view('friends.edit', ['friend' => $friend]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        \App\Models\Friend::find($id)->update($this->validatedData($request));

        // Valid and Created
        return redirect()->route('friends.index')->with('success', 'Friend was Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $friend = \App\Models\Friend::find($id);
        $friend->delete();

        return redirect()->route('friends.index')->with('success', 'Friend was deleted');
    }

    private function validatedData($request){
        return $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'integer'
        ]);
    }
}
