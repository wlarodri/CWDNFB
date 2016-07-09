<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pelicula;
use App\http\Requests\PeliculaCreateRequest;
use App\http\Requests\PeliculaUpdateRequest;
use Session;


class PeliculaController extends Controller
{

    public function index()
    {
        $pelicula = Pelicula::paginate(10);

        return view('pelicula.index', compact('pelicula'));
        return view('pelicula.index')->with('pelicula');

    }

     public function create()
    {
        return view('pelicula.create');
    }

    public function store(Request $request)
    {
       // dd($request);
        Pelicula::create($request->all());
        Session::flash('save','La Película se ha guardado correctamente ');
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
        Session::flash('update','La Película se ha actualizado correctamente ');
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
        Session::flash('delete','La Película se ha eliminado correctamente ');
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