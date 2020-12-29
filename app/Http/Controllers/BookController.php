<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BookController;

class BookController extends Controller
{
    public function test(){
        return view('layouts/book');
    }
}
