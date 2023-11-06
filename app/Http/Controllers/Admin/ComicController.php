<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
        //dd($comics);
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create')->with('message', 'Congrats! Your Comic is create 👍');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {

        $comic = new Comic();

        $val_data = $request->validated();

        if ($request->has('thumb')) {

            $thumb_path = Storage::put('thumb', $request->thumb);

            if (!is_null($comic->thumb) && Storage::fileExists($comic->thumb)) {
                Storage::delete($comic->thumb);
            }
            $val_data['thumb'] = $thumb_path;
        }

        /* if ($request->has('thumb')) {
            $thumb_path = Storage::put('thumb', $request->thumb);
            //dd($thumb_path);
            $val_data['thumb'] = $thumb_path;
        }
 */
        /* $comic->title = $request->title;
        $comic->price = $request->price;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->save(); */

        /* return view('admin.comics.index'); */

        $comic->create($val_data);

        $comics = Comic::all();

        return to_route('comics.index', compact('comics'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic, Request $request)
    {

        if ($request->has('thumb')) {
            $thumb_path = Storage::put('thumb', $request->thumb);
            //dd($thumb_path);
            $data['thumb'] = $thumb_path;
        }

        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        //dd($request->all());
        $val_data = $request->validated();

        if ($request->has('thumb')) {

            $thumb_path = Storage::put('thumb', $request->thumb);

            if (!is_null($comic->thumb) && Storage::fileExists($comic->thumb)) {
                Storage::delete($comic->thumb);
            }
            $val_data['thumb'] = $thumb_path;
        }

        /* if ($request->has('thumb') && $comic->thumb) {

            Storage::delete($comic->thumb);

            $newThumb = $request->thumb;
            $path = Storage::put('thumb', $newThumb);
            $data['thumb'] = $path;
        } */

        $comic->update($val_data);

        return to_route('comics.index')->with('message', 'Congrats! Your update is successfully 👍');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        if (!is_null($comic->thumb)) {
            Storage::delete($comic->thumb);
        }

        $comic->delete();

        return to_route('comics.index')->with('message', 'Delete Successfully ✅');
    }
}
