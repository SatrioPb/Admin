<?php

namespace App\Http\Controllers;

use App\Models\Bankaccount;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index()
    {
        $bank = Bankaccount::all();
        $bankcount = Bankaccount::count();

        return view('Bank/bank', compact('bank', 'bankcount'));
    }
    public function edit($id)
    {
        // Ambil artikel berdasarkan ID
        $bank = Bankaccount::findOrFail($id);

        // Kirim artikel ke view 'editarticle'
        return view('Bank/editbank', compact('bank'));
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'account_number' => 'required',
            'bank_name' => 'required',  // Mengubah 'bankname' menjadi 'bank_name' agar sesuai
        ]);

        // Mengambil bank account berdasarkan ID
        $bank = Bankaccount::findOrFail($id);

        // Mengupdate bank account dengan data dari request
        $bank->name = $request->input('name');
        $bank->account_number = $request->input('account_number'); // Tambahkan ini
        $bank->bank_name = $request->input('bank_name'); // Tambahkan ini

        // Simpan perubahan
        $bank->save();

        // Redirect ke halaman yang diinginkan
        return redirect()->route('bank.index')->with('success', 'Bank account updated successfully!');
    }

    public function destroy($id)
    {
        // Cari artikel berdasarkan ID
        $bank = Bankaccount::findOrFail($id);

        // Hapus artikel
        $bank->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('bank.index')->with('success', 'Article deleted successfully!');
    }
}
