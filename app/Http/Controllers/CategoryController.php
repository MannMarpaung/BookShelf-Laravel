<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();

        return view('category.index', compact('category'));
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
            // create category
            $data = $request->all();

            Category::create($data);

            // dd($category);
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
            $category = Category::find($id);

            $data = $request->all();
            
            $category->update($data);

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
            $category = Category::find($id);

            // delete data by id
            $category->delete();

            return redirect()->back();
        } catch (Exception $e) {
            // dd($e->getMessage());
            return redirect()->back();
        }
    }
}
