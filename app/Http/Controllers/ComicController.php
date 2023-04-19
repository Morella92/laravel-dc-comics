<?php

namespace App\Http\Controllers;
use App\Models\Comic;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

        $data= $request->validate([
            'title' => 'required|max:255|min:5',
            'description' => 'nullable|string|max:255|min:70',
            'thumb' => 'required|max:255|url',
            'price' => 'required|numeric|max:999.99',
            'series' => 'required|max:255|min:5',
            'sale_date' => 'nullable|date|max:10',
            'type' => ['required', Rule::in(['action', 'adventure', 'fantasy', 'horror', 'comic'])]
        ]);

        // $data = $request->all();

        //primo metodo
        // $new_book = new Comic;
        // $new_book->title = $data['title'];
        // $new_book->description = $data['description'];
        // $new_book->thumb = $data['thumb'];
        // $new_book->price = $data['price'];
        // $new_book->series = $data['series'];
        // $new_book->sale_date = $data['sale_date'];
        // $new_book->type = $data['type'];

        // $new_book->save();

        //secondo metodo, usa solo le proprietà presenti nel fillable del model
        $new_book = Comic::create($data);
        return to_route('comics.show', $new_book);
    }

    public function edit(Comic $comic){

        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic){

        $data= $request->validate([
            'title' => 'required|max:255|min:5',
            'description' => 'nullable|string|max:255|min:70',
            'thumb' => 'required|max:255|url',
            'price' => 'required|numeric|max:999.99',
            'series' => 'required|max:255|min:5',
            'sale_date' => 'nullable|date|max:10',
            'type' => ['required', Rule::in(['action', 'adventure', 'fantasy', 'horror', 'comic'])]
        ]);
        // $data = $request->all();

        // $comic = new Comic;
        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];

        // $comic->save();

        //questo metodo fa:
        // $comic->fill($data);
        // $comic->save();
        //in questa sola riga:
        
        $comic->update($data);

        

        return to_route('comics.show', $comic->id);
    }

    public function destroy(Comic $comic){

        $comic->delete();

        return to_route('comics.index');
    }
}

