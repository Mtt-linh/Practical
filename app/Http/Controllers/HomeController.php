<?php

namespace App\Http\Controllers;

use App\Author;
use App\Student;
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
            "book" => $book,
        ]);
    }

    public function Information()
    {
        return view("School.new");
    }

    public function SaveInformation(Request $request)
    {
        $request->validate([
            "student_name" => "required",
            "student_email" => "required",
            "phone" => "required",
            "feedback" => "required"
        ]);
        try {
            Student::create([
                "student_name" => $request->get("student_name"),
                "student_email" => $request->get("student_email"),
                "phone" => $request->get("phone"),
                "feedback" => $request->get("feedback"),

            ]);
//            $data["message"] = "Bạn đã gửi feedback thành công  " . $request->get("student_name");
//            notify("global", "new", $data);
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return view("school.home");
    }
    public  function homeSchool(){
        return view("School.home");
    }
}
