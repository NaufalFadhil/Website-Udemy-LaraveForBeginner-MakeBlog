<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function index()
    {
        return view('post.main');
    }

    public function create()
    {
        $categories = array();

        foreach (Category::all() as $category) {
            $categories[$category->id] = $category->name;
        }

        return view('post.create')
            ->with('categories', $categories);
    }
}
