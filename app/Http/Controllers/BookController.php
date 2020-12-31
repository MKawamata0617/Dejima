<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BookController;

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
}
