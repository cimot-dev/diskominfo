<?php
// Controller: PegawaiController.php
namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {

        $pegawai = Pegawai::paginate(10); // Mengambil semua data pegawai
        $jumlahPegawai = Pegawai::count(); // Menghitung jumlah pegawai
        return view('pegawai', compact('pegawai', 'jumlahPegawai')); // Menyertakan data ke view
    }
}