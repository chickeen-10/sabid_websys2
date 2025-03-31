<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        try {
            Category::create(['name' => $request->name]);
            return redirect()->route('categories.index')->with('success', 'Category added successfully.');
        } catch (QueryException $e) {
            return back()->with('error', 'Failed to add category.');
        }
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $id
        ]);

        try {
            $category = Category::findOrFail($id);
            $category->update(['name' => $request->name]);
            return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
        } catch (QueryException $e) {
            return back()->with('error', 'Failed to update category.');
        }
    }

    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();
            return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
        } catch (QueryException $e) {
            return back()->with('error', 'Failed to delete category.');
        }
    }
}
