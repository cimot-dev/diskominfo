<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function PostCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::where('categories_id', $category->id)->paginate(9);
        $categories = Category::all();
        return view('berita', compact('posts', 'category', 'categories'));
    }
}
