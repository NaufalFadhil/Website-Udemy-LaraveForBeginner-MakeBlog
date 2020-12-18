<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Post;

class StoreController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('store.main')
            ->with('posts', Post::orderBy('created_at', 'DESC')->paginate(3))
            ->with('categories', $categories);
    }

    public function getView($id)
    {
        $categories = Category::all();

        return view('store.view')
            ->with('posts', Post::find($id))
            ->with('categories', $categories);
    }

    public function getCategory($id)
    {
        $categories = Category::all();
        $post = DB::table('posts')->where('category_id', '=', $id)->paginate(3);

        return view('store.category')
            ->with('posts', $post)
            ->with('categories', $categories);
    }

    public function getSearch(Request $request)
    {
        $keyword = $request->input('keyword');
        $categories = Category::all();

        if ($keyword != "") {
            return view('store.search')
                ->with('posts', Post::where('title', 'LIKE', '%' . $keyword . '%')->paginate(3))
                ->with('keyword', $keyword)
                ->with('categories', $categories);
        } else {
            return redirect('/');
        }
    }
}
