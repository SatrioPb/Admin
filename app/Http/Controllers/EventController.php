<?php

namespace App\Http\Controllers;

use App\Models\Bankaccount;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
   public function index()
   {

      $event = Event::all();
      $eventcount = Event::count();

      return view('Event/event', compact('event', 'eventcount'));
   }
   public function edit($id)
   {
      // Ambil artikel berdasarkan ID
      $event = Event::findOrFail($id);

      // Kirim artikel ke view 'editarticle'
      return view('/Event/editevent', compact('event'));
   }


   public function update(Request $request, $id)
   {
      // Validasi input
      $request->validate([
         'name' => 'required',
         'account_number' => 'required',
         'bankname' => 'required',
      ]);

      // Mengambil artikel berdasarkan ID
      $bank = Bankaccount::findOrFail($id);

      // Mengupdate bank dengan data dari request
      $bank->name = $request->input('name');
      $bank->account_number = $request->input('account_number');
      $bank->bank_name = $request->input('bankname'); // Sesuaikan dengan field di tabel jika ada

      // Simpan perubahan
      $bank->save();

      // Redirect ke halaman index dengan pesan sukses
      return redirect()->route('bank.index')->with('success', 'Bank account updated successfully!');
   }

   public function destroy($id)
   {
      // Cari artikel berdasarkan ID
      $event = Event::findOrFail($id);

      // Hapus artikel
      $event->delete();

      // Redirect ke halaman index dengan pesan sukses
      return redirect()->route('event.index')->with('success', 'Event deleted successfully!');
   }
}
