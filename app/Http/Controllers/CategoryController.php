<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }
    public function create(Request $request)
    {
        Category::addCategory($request);
        return redirect('/manage-category')->with('message', 'Category create successfully.');
    }
    public function manage()
    {
        return view('admin.category.manage', ['categories' => Category::orderBy('id', 'desc')->get()]);
    }
    public function edit($id)
    {
        return view('admin.category.edit', ['category' => Category::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'Category update successfully.');
    }
    public function delete($id)
    {
        Category::categoryDelete($id);
        return redirect('/manage-category')->with('message', 'Category delete successfully.');
    }
}
