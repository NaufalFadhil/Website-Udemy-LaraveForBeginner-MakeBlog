<?php

namespace App\Http\Controllers;

use Validator;
use Session;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $categories = category::all();

        return view('category.main')
            ->with('categories', $categories);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:20|min:3'
        ]);

        if ($validator->fails()) {
            return redirect('category/create')
                ->withinput()
                ->witherrors($validator);
        }

        // CREATE CATEGORY
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        Session::flash('category_create', 'New category is Created');
        $request->session()->flash('category_create', 'New category is Created!');

        return redirect('category/create');
    }

    public function edit($id)
    {
        $categories = category::findOrFail($id);

        return view('category.edit')
            ->with('categories', $categories);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:20|min:3'
        ]);

        if ($validator->fails()) {
            return redirect('category/' . $category->id . '/edit')
                ->withinput()
                ->witherrors($validator);
        }

        // CREATE CATEGORY
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->save();

        Session::flash('category_update', 'Category is Updated');
        // $request->session()->flash('category_update', 'Category is Update!');

        return redirect('category');
    }

    public function destroy($id)
    {
        $categories = Category::find($id);

        $categories->delete();

        Session::flash('category_delete', 'Category is Deleted');

        return redirect('category');
    }
}
