<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(12); // Urutkan berdasarkan created_at, descending
        $categories = Category::all();
        return view('berita', compact('posts', 'categories'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = Post::where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->paginate(12);
        $categories = Category::all();

        return view('berita', compact('posts', 'categories'));
    }

    public function PostCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::where('categories_id', $category->id)->paginate(9);
        $categories = Category::all();
        return view('berita', compact('posts', 'category', 'categories'));
    }

    // public function show($slug)
    // {
    //     $post = Post::findOrFail($slug);
    //     return view('berita', compact('post'));
    // }

}
