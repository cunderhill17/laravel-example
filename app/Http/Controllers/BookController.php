<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Return a list of Books
     */
    public function index(Request $request)
    {
        $authorId = $request->get('author_id', null);

        $booksQuery = Book::query();
        if ($authorId !== null) {
            //$booksQuery->whereAuthorId($authorId); <-- also valid
            $booksQuery->where('author_id', '=', $authorId);
        }
        $books= $booksQuery->get();
        return $books;
    }

    //Dependency Injection ??
    public function show(Book $book)
    {
        // $book = Book::find($id);
        //dd($book);
        return $book;
    }
}
