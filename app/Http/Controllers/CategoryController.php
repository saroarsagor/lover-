<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{

    public function index()
    {
        $data = [
            'categories' => Category::latest()->get(),
        ];
        return view('admin.category.index', $data);
    }
    public function create()
    {
        $data = [
            'model' => new Category()
          
        ];

        return view('admin.category.create', $data);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $category = new Category();
        $category->fill($request->all());
        $category->save();
        Toastr::success('Category Created Successfully!.', '', ["closeButton" => "true", "progressBar" => "true"]);
        return redirect()->route('categories.index');
    }
    public function show(Category $category)
    {
        //
    }
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.category.edit', compact('category','categories'));
    }
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $category->fill($request->all());
        $category->update();
        Toastr::success('Category Updated Successfully!.', '', ["closeButton" => "true", "progressBar" => "true"]);
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        Toastr::success('Category Deleted Successfully!.', '', ["closeButton" => "true", "progressBar" => "true"]);
        return redirect()->route('categories.index');

    }
}
