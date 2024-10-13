<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerangkatDaerah;

class PerangkatDaerahController extends Controller
{
    public function index(Request $request)
    {
        // Get the search query if available
        $search = $request->input('search');

        // If there is a search query, filter the results based on it
        $data = PerangkatDaerah::when($search, function ($query, $search) {
            return $query->where('nama_perangkat_daerah', 'like', "%{$search}%")
                ->orWhere('nama_jabatan', 'like', "%{$search}%")
                ->orWhere('alamat', 'like', "%{$search}%");
        })
            ->paginate(10);

        return view('perda', compact('data', 'search'));
    }
}
