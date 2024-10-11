<?php

namespace App\Http\Controllers;

use App\Models\cities;
use App\Models\Payment;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        // Eager load 'user', 'profile', 'province', dan 'city'
        $query = Payment::with(['user.profile.province', 'user.profile.city']);

        // Ambil data provinsi untuk dropdown
        $provinces = Province::all();
        $cities = cities::all();

        // Filter berdasarkan province_id jika ada request filter
        if ($request->filled('province_id')) {
            $query->whereHas('user.profile', function ($q) use ($request) {
                $q->where('province_id', $request->province_id);
            });
        }

        // Filter berdasarkan city_id jika ada request filter
        if ($request->filled('city_id')) {
            $query->whereHas('user.profile', function ($q) use ($request) {
                $q->where('city_id', $request->city_id);
            });
        }

        // Filter berdasarkan tanggal jika ada
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }

        // Filter berdasarkan nilai pembayaran
        if ($request->filled('value')) {
            if ($request->value == '35000') {
                $query->where('value', 35000); // Hanya untuk nilai 35000
            } elseif ($request->value == '65000++') {
                $query->where('value', '>=', 65000); // Nilai lebih dari 65000
            }
        }

        $payment = $query->get();
        $paymentcount = $payment->count();

        return view('Payment/payment', compact('payment', 'paymentcount', 'provinces', 'cities'));
    }


    public function success(Request $request)
    {
        // Eager load 'user', 'profile', 'province', dan 'city'
        $query = Payment::with(['user.profile.province', 'user.profile.city'])
            ->where('status', 'success'); // Menambahkan filter status

        // Ambil data provinsi untuk dropdown
        $provinces = Province::all();
        $cities = cities::all();

        // Filter berdasarkan province_id jika ada request filter
        if ($request->filled('province_id')) {
            $query->whereHas('user.profile', function ($q) use ($request) {
                $q->where('province_id', $request->province_id);
            });
        }

        // Filter berdasarkan city_id jika ada request filter
        if ($request->filled('city_id')) {
            $query->whereHas('user.profile', function ($q) use ($request) {
                $q->where('city_id', $request->city_id);
            });
        }

        // Filter berdasarkan tanggal jika ada
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }
        // Filter berdasarkan nilai pembayaran
        if ($request->filled('value')) {
            if ($request->value == '35000'
            ) {
                $query->where('value', 35000); // Hanya untuk nilai 35000
            } elseif ($request->value == '65000++') {
                $query->where('value', '>=', 65000); // Nilai lebih dari 65000
            }
        }


        $payment = $query->get();
        $paymentcount = $payment->count();

        return view('Payment/paymentsuccess', compact('payment', 'paymentcount', 'provinces', 'cities'));
    }
}
