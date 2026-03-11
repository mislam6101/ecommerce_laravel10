<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();
        return view('backend.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|regex:/^[A-Za-z\s]+$/|max:50|min:3|unique:categories,name',
            ],
            [
                'name.required' => 'Category name is required.',
                'name.regex' => 'Category name must be a letter.',
                'name.max' => 'Category name cannot be more than 50 characters.',
                'name.min' => 'Category name cannot be less than 3 characters.',
                'name.unique' => 'This category already exists.',
            ]
        );

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Category Deleted Successfully');
    }
}
