<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all()->random(3);
        return view('welcome', compact('comics'));
    }

    public function comics()
    {
        $comics = Comic::all();
        return view('comics', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('show', ['comic' => $comic]);
    }
}
