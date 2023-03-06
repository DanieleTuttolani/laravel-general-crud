<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function index()
    {
        // $guest = Egg::all();
        // return view('eggs.index', compact('eggs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        // $egg = new Egg();


        // $egg->fill($data);

        // $egg->save();
        // // per tornare alla route
        // return to_route('eggs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $egg = Egg::findOrFail($id);
        // return view('eggs.show', compact('egg'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Egg $egg)
    {
        // return view('eggs.edit', compact('egg'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Egg $egg)
    {
        // $data = $request->all();

        // $egg->fill($data);

        // $egg->save();

        // return to_route('eggs.show', $egg->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Egg $egg)
    {
        // $egg->delete();
        // return to_route('eggs.index');
    }
}
