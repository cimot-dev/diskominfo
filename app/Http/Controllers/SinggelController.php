<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class SinggelController extends Controller
{

    public function singgel($slug)
    {
        // Ambil post berdasarkan slug dan sertakan relasi author dan category
        $post = Post::where('slug', $slug)->with(['author', 'category'])->firstOrFail();

        // Ambil 5 postingan terkait berdasarkan kategori, kecuali postingan yang sedang ditampilkan
        $relatedPosts = Post::where('category_id', $post->category_id) // Ubah 'categories_id' menjadi 'category_id'
            ->where('id', '!=', $post->id)
            ->take(5) // Ambil 5 postingan terkait
            ->get();

        // Ambil semua kategori
        $categories = Category::all();

        // Kembalikan view 'post' dengan data yang diperlukan
        return view('post', compact('post', 'relatedPosts', 'categories'));
    }
}