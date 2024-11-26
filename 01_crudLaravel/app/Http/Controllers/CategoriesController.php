<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public readonly Category $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->category->create([
            'name' => $request->input('name')
        ]);
        if ($created) {
            return redirect()->back()->with('message', 'Successfully created');
        }
        return redirect()->back()->with('message', "Error: couldn't create category");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->category->where('id', $id)->delete();
        return redirect()->route('adminPanel')->with('message', 'Category deleted successfully');
    }
}