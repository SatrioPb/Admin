<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index()
    {
        $depar = Departement::all();
        $deparcount = Departement::count();


        return view('Departement/departement', compact('depar', 'deparcount'));
    }

    public function edit($id)
    {
        // Ambil artikel berdasarkan ID
        $depar = Departement::findOrFail($id);

        // Kirim artikel ke view 'editarticle'
        return view('Departement/editdepartement', compact('depar'));
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required',

        ]);

        // Mengambil artikel berdasarkan ID
        $depar = Departement::findOrFail($id);

        // Mengupdate artikel dengan data dari request
        $depar->title = $request->input('judul');
        $depar->save();

        // Redirect ke halaman yang diinginkan
        return redirect()->route('departement.index')->with('success', 'Event updated successfully!');
    }
    public function destroy($id)
    {
        // Cari artikel berdasarkan ID
        $depar = Departement::findOrFail($id);

        // Hapus artikel
        $depar->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('departement.index')->with('success', 'Article deleted successfully!');
    }
}
