<?php

namespace App\Http\Controllers;
use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){

        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request){

        $data = $request->all();

        $new_book = new Comic;
        $new_book->title = $data['title'];
        $new_book->description = $data['description'];
        $new_book->thumb = $data['thumb'];
        $new_book->price = $data['price'];
        $new_book->series = $data['series'];
        $new_book->sale_date = $data['sale_date'];
        $new_book->type = $data['type'];

        $new_book->save();

        return to_route('comics.show', $new_book);
    }

    
}

