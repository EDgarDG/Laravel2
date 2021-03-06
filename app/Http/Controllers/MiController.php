<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view("welcome");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        
        return view("crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store() {
        //
        return view("articulos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        //
        return view("mostrar");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /* MÉTODO QUE RETORNA UNA VISTA DE NUESTRA BLANTILLA  */
    public function contactar() {

        $alumnos=["Edgardo", "Sara", "Angelica", "Antonio"];
        /* $alumnos=[]; */

        /* FUNCIÓN COMPACT DE PHP PERMITE PASAR PARAMETROS DE VARIABLE */
        return view("contacto",compact("alumnos"));
    }

    public function galeria() {
        
        return view("galeria");
    }

}
