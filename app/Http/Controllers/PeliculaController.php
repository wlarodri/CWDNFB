<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelicula = Pelicula::all();
        // carga la vista y retona los igredientes
        return view('pelicula.index', compact('pelicula'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelicula.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pelicula::create($request->all());
        return \Redirect::to('pelicula');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula = Pelicula::find($id);

        return view('pelicula.show', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula = Pelicula::find($id);
        return view('pelicula.edit', compact('pelicula', $pelicula));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateInfoEmpresaRequest $request, $id)
    {
        $pelicula = Pelicula::find($id);
        Pelicula::create($request->all());
        $pelicula->save();
        return redirect()->to('pelicula')->with('message', 'La pelicula ha sido actualizada correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = Pelicula::find($id);
        $pelicula->delete();
        return redirect()->to('pelicula')->with('message', 'La pelicula ha sido eliminado correctamente');
    }

    /*public function __construct()
    {
        $this->middleware('grupo:2');

    }*/
}