<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Http\Requests\StoreLibrosRequest;
use App\Http\Requests\UpdateLibrosRequest;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libro = Libros::all();
        return view('libros.index', compact('libro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibrosRequest $request)
    {
        $libro = new Libros;
        $libro ->titulo = $request->titulo;
        $libro ->autor = $request->autor;
        $libro ->disponibilidad = $request->disponibilidad;

        $libro ->save();
        return redirect()->route('libros.index')->with('mensaje','el libro fue registrado');

    }

    /**
     * Display the specified resource.
     */
    public function show(Libros $libro)
    {
        $libro = Libros::find($libro->id);
        return view('libros.show',compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libros $libro)
    {
        $libro= Libros::find($libro ->id);
        //return $ticket;
        return view('libros.edit',compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibrosRequest $request, Libros $libro)
    {
        $libro = Libros::find($libro->id);

        $libro->titulo = $request-> titulo;
        $libro->autor = $request-> autor;

        
        $libro->save();

        return redirect()->route('libros.index')
                         ->with('mensaje','EL ticket fue modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libros $libro)
    {
        $libro::find($libro->id)->delete();
        return back()->with('mensaje','EL ticket fue eliminado');
    }
}
