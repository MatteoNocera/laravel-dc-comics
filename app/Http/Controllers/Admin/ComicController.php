<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        //dd($comics);
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $comic = new Comic();

        $data = $request->all();

        if ($request->has('thumb')) {
            $thumb_path = Storage::put('thumb', $request->thumb);
            //dd($thumb_path);
            $data['thumb'] = $thumb_path;
        }

        /* $comic->title = $request->title;
        $comic->price = $request->price;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->save(); */

        /* return view('admin.comics.index'); */

        $comic->create($data);

        $comics = Comic::all();

        return to_route('comics.index', compact('comics'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
