<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class berandaController extends Controller
{
    public function index()
    {
        // Mengambil 3 postingan terbaru
        $posts = Post::latest()->take(3)->get();

        // Mengirim data postingan ke view beranda
        return view('welcome', compact('posts'));
    }
}
