<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function comics()
    {
        $comics = config('db_comic');
        return view('comics', compact('comics'));
    }
}
