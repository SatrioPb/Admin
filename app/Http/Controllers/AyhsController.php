<?php

namespace App\Http\Controllers;

use App\Models\Ayhs;
use Illuminate\Http\Request;

class AyhsController extends Controller
{
    public function index()
    {
        // Mengambil semua ayahs dari database
        $ayhs = Ayhs::all();
        $ayhscount = Ayhs::count();

        // Mengirim data ke view 'ayhs'
        return view('Ayhs/ayhs', compact('ayhs','ayhscount'));
    }
    public function edit($id)
    {
        // Ambil artikel berdasarkan ID
        $ayhs = ayhs::findOrFail($id);

        // Kirim artikel ke view 'editarticle'
        return view('Ayhs/editayhs', compact('ayhs'));
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'arab' => 'required',

        ]);

        // Mengambil artikel berdasarkan ID
        $ayhs = ayhs::findOrFail($id);

        // Mengupdate artikel dengan data dari request
        $ayhs->value = $request->input('arab');
        $ayhs->save();

        // Redirect ke halaman yang diinginkan
        return redirect()->route('ayhs.index')->with('success', 'Article updated successfully!');
    }
    public function destroy($id)
    {
        // Cari artikel berdasarkan ID
        $ayhs = ayhs::findOrFail($id);

        // Hapus artikel
        $ayhs->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('ayhs.index')->with('success', 'Article deleted successfully!');
    }
}
