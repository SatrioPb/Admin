<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\BooksCategory;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        // Using join to fetch the books along with their categories
        $buku = Books::join('book_categories', 'books.book_category_id', '=', 'book_categories.id')
        ->select('books.id', 'books.title', 'book_categories.name as category_name')
        ->get();

        // Count of books (optional)
        $bukucount = Books::count();

        return view('Books/book', compact('buku', 'bukucount'));
    }


    public function edit($id)
    {
        // Ambil buku berdasarkan ID
        $book = Books::findOrFail($id);
        // Ambil semua kategori untuk dropdown
        $categories = BooksCategory::all();

        return view('Books/editbook', compact('book', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|max:255',
            'book_category_id' => 'required|exists:book_categories,id',
        ]);

        // Update data buku
        $book = Books::findOrFail($id);
        $book->title = $request->title;
        $book->book_category_id = $request->book_category_id;
        $book->save();

        return redirect()->route('books.index')->with('success', 'Book updated successfully');
    }
    public function destroy($id)
    {
        // Hapus buku berdasarkan ID
        $book = Books::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully');
    }
}
