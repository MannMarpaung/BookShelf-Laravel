<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Place;
use Exception;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();

        return view('book.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book = Book::select('id', 'place_id', 'category_id', 'title', 'author' , 'edition', 'publishing', 'isbn', 'image', 'pdf');
        $category = Category::all();
        $place = Place::all();

        return view('book.create', compact('book', 'category', 'place'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'place_id',
            'category_id',
            'title',
            'author',
            'edition',
            'publishing',
            'isbn',
            'image',
            'pdf'
        ]);

        try {

            // create book
            $data = $request->all();

            $book = Book::create($data);

            return redirect()->route('book.index');

        } catch(Exception $e) {
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
        $book = Book::findOrFail($id);

        $category = Category::all();

        $place = Place::all();

        return view('book.edit', compact('category', 'place', 'book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'place_id',
            'category_id',
            'title',
            'author',
            'edition',
            'publishing',
            'isbn',
            'image',
            'pdf'
        ]);

        try {

            $book = Book::find($id);

            $data = $request->all();
            
            $book->update($data);

            // dd($book);

            return redirect()->route('book.index');
            
        } catch (\Exception $e) {
            // dd($e->getMessage());
            return redirect()->route('book.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $book = Book::find($id);

            $book->delete();

            return redirect()->back();

        } catch(Exception $e) {
            // dd($e->getMessage());
            return redirect()->back();
        }
    }
}
