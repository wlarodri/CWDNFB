<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use Session;


class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = Usuario::paginate(10);

        return view('usuario.index', compact('usuario'));
        return view('usuario.index')->with('usuario');

    }

    public function create()
    {
        return view('usuario.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        Usuario::create($request->all());
        Session::flash('save','El usuario se ha guardado correctamente ');
        return \Redirect::to('usuario');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $usuario = Usuario::find($id);
        return view('usuario.show')->with('usuario',$usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuario.edit')-> with('usuario', $usuario);
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
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        Session::flash('update','El usuario se ha actualizado correctamente ');
        return redirect()->route('usuario.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        Session::flash('delete','El usuario se ha eliminado correctamente ');
        return redirect()->route('usuario.index');
    }
    
}
