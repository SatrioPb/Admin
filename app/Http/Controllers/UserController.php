<?php

namespace App\Http\Controllers;

use App\Models\cities;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Mengambil data provinsi dan kota untuk filter
        $provinces = Province::all(); // Pastikan model Province ada
        $cities = cities::all(); // Pastikan model City ada

        // Mengambil data pengguna beserta profil dan provinsi
        $users = User::with(['profile.province', 'profile.cities'])->get();

        // Menghitung jumlah pengguna
        $userCount = $users->count();

        // Mengirim data ke view
        return view('user/user', compact('users', 'userCount', 'provinces', 'cities'));
    }
    public function edit($id)
    {
        // Mengambil data pengguna berdasarkan ID
        $user = User::with(['profile.province', 'profile.cities'])->findOrFail($id);

        // Mengirim data pengguna ke view edit
        return view('user/edituser', compact('user'));
    }

    // Fungsi untuk memperbarui data pengguna
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'contact' => 'nullable|string|max:15', // Validasi contact (optional)
        ]);

        // Mengambil data pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Memperbarui data pengguna
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        // Memperbarui contact dari tabel profile jika ada
        if ($user->profile) {
            $user->profile->contact = $request->input('contact');
            $user->profile->save();
        }

        // Redirect setelah berhasil memperbarui
        return redirect()->route('users.index')->with('success', 'Data pengguna berhasil diperbarui.');
    }


    // Fungsi untuk menghapus data pengguna
    public function destroy($id)
    {
        // Mengambil data pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Menghapus pengguna
        $user->delete();

        // Redirect setelah berhasil menghapus
        return redirect()->route('users.index')->with('success', 'Data pengguna berhasil dihapus.');
    }

    public function view($id)
    {
        // Mengambil data pengguna berdasarkan ID
        $user = User::with(['profile.province', 'profile.cities'])->findOrFail($id);

        // Mengirim data pengguna ke view edit
        return view('user/viewuser', compact('user'));
    }
    public function filter(Request $request)
    {
        // Mendapatkan input dari form filter
        $provinceId = $request->input('province_id');
        $cityId = $request->input('city_id');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Membangun query untuk mendapatkan pengguna
        $users = User::with(['profile.province', 'profile.cities']);

        // Tambahkan filter berdasarkan provinsi
        if ($provinceId) {
            $users->whereHas('profile.province', function ($query) use ($provinceId) {
                $query->where('id', $provinceId);
            });
        }

        // Tambahkan filter berdasarkan kota
        if ($cityId) {
            $users->whereHas('profile.cities', function ($query) use ($cityId) {
                $query->where('id', $cityId);
            });
        }

        // Tambahkan filter berdasarkan tanggal
        if ($startDate) {
            $users->whereDate('created_at', '>=', $startDate);
        }
        if ($endDate) {
            $users->whereDate('created_at', '<=', $endDate);
        }

        // Ambil data pengguna setelah menerapkan filter
        $users = $users->get();

        // Menghitung jumlah pengguna
        $userCount = $users->count();

        // Ambil data provinsi dan kota untuk filter
        $provinces = Province::all();
        $cities = cities::all();

        // Mengirim data ke view
        return view('user/user', compact('users', 'userCount', 'provinces', 'cities'));
    }
}
