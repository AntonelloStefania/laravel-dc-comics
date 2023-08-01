<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Support\Facades\Validator;

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
        $comics = Comic::all();
        
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $this->validation($request->all());
        //$form_data = $request->all();

        $comic = new Comic();
        $comic->thumb = $form_data['thumb'];
        $comic->title =$form_data['title'];
        $comic->series=$form_data['series'];
        $comic->price=$form_data['price'];
        $comic->type=$form_data['type'];

        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
       
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $this->validation($request->all());
        //$form_data = $request->all();

        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic'=> $comic->id]);
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
        return redirect()->route('comics.index');
    }

    public function validation($data){
        $validator=Validator::make($data,
        [   
            'thumb'=> 'nullable',
            'title'=> 'required|max:255',
            'type'=> 'max:50',
            'price'=> 'required|max:10',
            'series'=> 'max:100',
        ],
        [   
            'title.required'=>'Title needed',
            'title.max'=>'Title must contain less than :max character',
            'type.max'=>'Type must contain less than :max character',
            'price.required'=>'Price is required',
            'price.max'=>'Price can\'t contain more than :max character',
            'series.max'=>'Series can\'t be longer than :max character',
        ]
        )->validate();
        return $validator;
    }
}



