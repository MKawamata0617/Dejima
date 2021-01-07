<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BookController;
use App\Models\Book;

class BookController extends Controller
{
    public function show(){
        $mail = 'test.gmail';
        $name = 'test.name';
        $sex = 'test.sex';
        $job = 'test.job';
        $weapon = 'test. weapon';
        $technique = 'test.technique';
        return view('book/show', compact(['mail', 'name', 'sex', 'job', 'weapon', 'technique']));
    }

    public function index(){
        $books = Book::all();
        return view('book/book', compact(['books']));

    }

    public function create(){
        dd(1);
        return view("book.create");
    }
}