<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->get();
        $count = $comics->count();
        //$comics = Comic::orderBy('id')->cursorPaginate(5);
        //dd($comics,$comics->previousPageUrl(), $comics->nextPageUrl());
        //dd(view('dashboard.comics.index', compact('comics'))->render());
        return view('dashboard.comics.index', compact('comics', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = [
            'message' => 'Prodotto creato con successo',
            'status' => 'success'
        ];

        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        Session::flash('alert-message', $info);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('dashboard.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('dashboard.comics.edit', compact('comic'));
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
        $info = [
            'message' => 'Prodotto aggiornato con successo',
            'status' => 'success'
        ];

        $data = $request->all();
        $comic->update($data);

        Session::flash('alert-message', $info);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Comic $comic)
    {
        $res = $comic->delete();

        $info = [
            'message' => $res ? 'Prodotto eliminato con successo' : 'Problema aliminazione prodotto',
            'status' => $res,
        ];

        // controllo richiesta fatta con ajax
        if($request->expectsJson()){
            $info['render'] = $this->index()->render();
            return $info;
        }

        Session::flash('alert-message', $info);
        return redirect()->route('comics.index');
    }
}
