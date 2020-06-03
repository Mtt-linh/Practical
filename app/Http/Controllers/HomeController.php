<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
class HomeController extends Controller
{
    public  function listBook(){
        $books=Book::all();
        $users=User::all();
        return view("book.list",[
            $books=>$books,
            $users=>$users
        ]);

    }
}
