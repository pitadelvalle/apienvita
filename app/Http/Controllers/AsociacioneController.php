<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asociacione;

class AsociacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('asociaciones');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asociacione = new Asociacione;
        $asociacione->title =$request->input('title');
        $asociacione->descripcion= $request->input('descripcion');

        $asociacione->save();
        return View('asociaciones')->with('asociaciones',$asociacione);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function display(){

        $asociaciones = Asociacione::all();
        return View('asociacionesform')->with('asociaciones',$asociaciones);
    }
    public function show($id)
    {
        return Asociacione:: where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asociaciones = Asociacione::find($id);
        return View('asociacioneupdate')->with('asociaciones',$asociaciones);
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
        $asociaciones = new Asociacione;
        $asociaciones->title =$request->input('title');
        $asociaciones->descripcion= $request->input('descripcion');

        $asociaciones->save();
        return redirect('/asociacionespage')->with('asociaciones',$asociaciones);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $asociaciones = Asociacione::find($id);
        $asociaciones ->delete();

        return redirect('/asociacionespage')->with('asociaciones', $asociaciones);
    }
}
