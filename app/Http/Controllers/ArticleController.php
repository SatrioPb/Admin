<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // Mengambil semua artikel dari database
        $articles = Article::all();
        $articleCount = Article::count();
        // Mengirim data ke view 'articles'
        return view('Article/articles', compact('articles', 'articleCount'));
    }

    public function edit($id)
    {
        // Ambil artikel berdasarkan ID
        $article = Article::findOrFail($id);

        // Kirim artikel ke view 'editarticle'
        return view('Article/editarticle', compact('article'));
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required',

        ]);

        // Mengambil artikel berdasarkan ID
        $article = Article::findOrFail($id);

        // Mengupdate artikel dengan data dari request
        $article->title = $request->input('judul');
        $article->save();

        // Redirect ke halaman yang diinginkan
        return redirect()->route('articles.index')->with('success', 'Article updated successfully!');
    }
    public function destroy($id)
    {
        // Cari artikel berdasarkan ID
        $article = Article::findOrFail($id);

        // Hapus artikel
        $article->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully!');
    }
}
