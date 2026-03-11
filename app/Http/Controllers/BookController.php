<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all()->toArray();
        return json_encode($books);
    }

    //Dependency Injection ??
    public function show(Book $book)
    {
        // $book = Book::find($id);
        //dd($book);
        return $book;
    }
}
