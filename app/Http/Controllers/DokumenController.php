<?php

namespace App\Http\Controllers;

use App\Models\category_document;
use App\Models\CategoryDocument;
use App\Models\Dokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function index(Request $request)
    {
        $categoryName = $request->input('category_id');

        // Retrieve documents based on the category
        if ($categoryName) {
            $dokumens = Dokumen::where('category_name', $categoryName)->get();
        } else {
            $dokumens = Dokumen::all(); // Show all documents if no category is selected
        }

        return view('dokumen', compact('dokumens'));
    }

    public function showRpjpdDocuments()
    {
        $rpjpdCategory = CategoryDocument::where('slug', 'rpjpd')->orWhere('name', 'RPJPD')->firstOrFail();
        $dokumens = Dokumen::where('category_document_id', $rpjpdCategory->id)->get();
        return view('components.dokumen.rpjpd', compact('dokumens', 'rpjpdCategory'));
    }
    public function showRpjmdDocuments()
    {
        $rpjmdCategory = CategoryDocument::where('slug', 'rpjmd')->orWhere('name', 'RPJMD')->firstOrFail();
        $dokumens = Dokumen::where('category_document_id', $rpjmdCategory->id)->get();
        return view('components.dokumen.rpjmd', compact('dokumens', 'rpjmdCategory'));
    }

    public function showRkpdDocuments()
    {
        $rkpdCategory = CategoryDocument::where('slug', 'rkpd')->orWhere('name', 'RKPD')->firstOrFail();
        $dokumens = Dokumen::where('category_document_id', $rkpdCategory->id)->get();
        return view('components.dokumen.rkpd', compact('dokumens', 'rkpdCategory'));
    }

    public function showRenstraPdDocuments()
    {
        $renstraPdCategory = CategoryDocument::where('slug', 'renstra-pd')->orWhere('name', 'Renstra-PD')->firstOrFail();
        $dokumens = Dokumen::where('category_document_id', $renstraPdCategory->id)->get();
        return view('components.dokumen.renstra', compact('dokumens', 'renstraPdCategory'));
    }

    public function showRenjaPdDocuments()
    {
        $renjaPdCategory = CategoryDocument::where('slug', 'renja-pd')->orWhere('name', 'Renja-PD')->firstOrFail();
        $dokumens = Dokumen::where('category_document_id', $renjaPdCategory->id)->get();
        return view('components.dokumen.renja', compact('dokumens', 'renjaPdCategory'));
    }

    public function showKajianDocuments()
    {
        $kajianCategory = CategoryDocument::where('slug', 'kajian')->orWhere('name', 'Kajian')->firstOrFail();
        $dokumens = Dokumen::where('category_document_id', $kajianCategory->id)->get();
        return view('components.dokumen.kajian', compact('dokumens', 'kajianCategory'));
    }
}
