<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sortBy = $request->query('sortBy') ?? 'first_name';
        $direction = $request->query('direction') ?? 'asc';
        $musicians = \App\Models\Musician::query()->orderBy($sortBy, $direction);

        return view('musicians.index', ['musicians' => $musicians->paginate(25)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $musician = new \App\Models\Musician;
        return view('musicians.create', ['musician' => $musician]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Models\Musician::create($this->validatedData($request));

        // Valid and Created
        return redirect()->route('musicians.index')->with('success', 'Musician was created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $musician = \App\Models\Musician::find($id);
        return view('musicians.show', ['musician' => $musician]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $musician = \App\Models\Musician::findOrFail($id);
        return view('musicians.edit', ['musician' => $musician]);
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
        \App\Models\Musician::findOrFail($id)->update($this->validatedData($request));

        // Valid and Created
        return redirect()->route('musicians.index')->with('success', 'Musician was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $musician = \App\Models\Musician::find($id);
        $musician->delete();

        return redirect()->route('musicians.index')->with('success', 'Musician was deleted');
    }

    private function validatedData($request){
        return $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'instrument' => 'required',
            'website' => 'required',
        ]);
    }
}
