<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
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
        $booksQuery->with('author');
        $books= $booksQuery->get();
        return $books;
    }

    //Dependency Injection ??
    public function show(Book $book)
    {

        //$author = $book->author;

        // $book = Book::find($id);
        //dd($book);

        $book->load('author');
        return $book;
    }
}
