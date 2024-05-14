<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Exception;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $place = Place::all();

        return view('place.index', compact('place'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        try {
            // create place
            $data = $request->all();

            Place::create($data);

            // dd($place);
            return redirect()->back();
        } catch (Exception $e) {
            // dd($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
        ]);

        try {
            $place = Place::find($id);

            $data = $request->all();
            
            $place->update($data);

            return redirect()->back();
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            // Get data by id
            $place = Place::find($id);

            // delete data by id
            $place->delete();

            return redirect()->back();
        } catch (Exception $e) {
            // dd($e->getMessage());
            return redirect()->back();
        }
    }
}
