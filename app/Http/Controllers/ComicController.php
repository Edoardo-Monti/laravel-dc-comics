<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comic = Comic::All();

        return view('pages.home', compact('comic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:255|unique:comics',
                'description' => 'required|min:10',
                'thumb' => 'required',
                'price' => 'required|numeric',
                'series' => 'required',
                'sale_date' => 'required',
                'type' => 'required',
            ],
            [
                'title.required' => 'è richiesto di compilare il campo title',
                'title.max' => 'il titolo deve contenere al massimo 255 caratteri',
                'title.unique' => 'Il titolo è gia stato utilizzato',
                'description.required' => 'è richiesto di compilare il campo title',
                'description.min' => 'il testo troppo corto per essere inserito',
                'thumb.required' => 'è richiesto di compilare il campo title',
                'price.required' => 'è richiesto di compilare il campo price',
                'price.numeric' => 'il campo deve essere un numero',
                'series.required' => 'è richiesto di compilare il campo serie',
                'sale_date.required' => 'è richiesto di compilare il campo sale_date',
                'type.required' => 'è richiesto di compilare il campo type',

            ],
        );
            

        $form_data = $request->all();

        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();
        return redirect()->route( 'comic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comicSingolo = Comic::find($id);
        return view('pages.singleCard', compact('comicSingolo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('pages.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate(
            [
                'title' => 'required|max:255',
                'description' => 'required|min:10',
                'thumb' => 'required',
                'price' => 'required|numeric',
                'series' => 'required',
                'sale_date' => 'required',
                'type' => 'required',
            ],
            [
                'title.required' => 'è richiesto di compilare il campo title',
                'title.max' => 'il titolo deve contenere al massimo 255 caratteri',
                'title.unique' => 'Il titolo è gia stato utilizzato',
                'description.required' => 'è richiesto di compilare il campo title',
                'description.min' => 'il testo troppo corto per essere inserito',
                'thumb.required' => 'è richiesto di compilare il campo title',
                'price.required' => 'è richiesto di compilare il campo price',
                'price.numeric' => 'il campo deve essere un numero',
                'series.required' => 'è richiesto di compilare il campo serie',
                'sale_date.required' => 'è richiesto di compilare il campo sale_date',
                'type.required' => 'è richiesto di compilare il campo type',

            ],
        );
            
        

        $form_data = $request->all();

        $comic->update($form_data);

        return redirect()->route('comic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comic.index');
    }
}
