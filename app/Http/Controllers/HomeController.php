<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use App\Book;
use App\User;
class HomeController extends Controller
{
    public function listBook()
    {
        $books = Book::all();
        $authors = Author::all();
        return view("book.list", [
            "books" => $books,
            "authors" => $authors
        ]);
    }

    public function findBook(Request $request)
    {
        $book = Book::where("title", $request->bookname)->get();
        return view("book.find", [
            "book"=>$book,
        ]);
    }
}
