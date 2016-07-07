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
        return view('pelicula.index')->with('pelicula');

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
       // dd($request);
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
        /* return view('pelicula.show', compact('pelicula'));*/
        $pelicula = Pelicula::find($id);
        return view('pelicula.show')->with('pelicula',$pelicula);
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
        return view('pelicula.edit')-> with('pelicula', $pelicula);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelicula = Pelicula::find($id);
        $pelicula->fill($request->all());
        $pelicula->save();
        return redirect()->route('pelicula.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pelicula::destroy($id);
        return redirect()->route('pelicula.index');
      }

    public function vista_agregar_pelicula($id)
    {
        $pelicula = Pelicula::find($id);
        return view('pelicula')->with('pelicula',$pelicula);
    }
    public function agregar_pelicula(Request $request,$id)
    {
        $pelicula = Pelicula::find($id);
        return redirect()->route('pelicula.show',[$pelicula]);
    }


}