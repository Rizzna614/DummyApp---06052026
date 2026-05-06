<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function sayHello ($name = null)
    {
        $name = request('name');

        return "<h1>Hello, $name!</h1>";
    }

    public function getBooks ()
    {
        $books =
        [
            Book::create(["Mazais Princis", "Antuāns de Sent-Eksperī", 96, 0]),
            Book::create(["Hobits", "Dž.R.R Tolkīns", 310, 0]),
            Book::create(["1984", "Džordžs Orvels", 328, 0]),
        ];

        return view("books", ['books' => $books]);
    }
}
