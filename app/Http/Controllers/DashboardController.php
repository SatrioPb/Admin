<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Ayhs;
use App\Models\Bankaccount;
use App\Models\Books;
use App\Models\BooksCategory;
use App\Models\Dashboard;
use App\Models\Departement;
use App\Models\Event;
use App\Models\Payment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil semua artikel dari database
        $articleCount = article::count();
        $arabcount = Ayhs::count();
        $eventcount = Event::count();
        $profilcount = Profile::count();
        $usercount = User::count();
        $deparcount = Departement::count();
        $bookscount = Books::count();
        $paymentcount = Payment::count();
        $postcount = Post::count();
        $bankcount = Bankaccount::count();

        // Mengirim data ke view 'welcome'
        return view('dashboard', compact('articleCount', 'arabcount', 'eventcount', 'profilcount', 'usercount', 'deparcount','bookscount','paymentcount','postcount','bankcount'));
    }
}
