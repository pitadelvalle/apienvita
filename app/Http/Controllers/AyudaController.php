<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ayuda;

class AyudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('ayuda');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ayuda = new Ayuda;
        $ayuda->title =$request->input('title');
        $ayuda->descripcion= $request->input('descripcion');

        $ayuda->save();
        return View('ayuda')->with('ayuda',$ayuda);
    }
    public function display(){

        $ayudas = Ayuda::all();
        return View('ayudaform')->with('ayuda',$ayudas);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Ayuda:: where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ayudas = Ayuda::find($id);
        return View('ayudaupdate')->with('ayuda',$ayudas);
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
        $ayudas = new Ayuda;
        $ayudas->title =$request->input('title');
        $ayudas->descripcion= $request->input('descripcion');

        $ayudas->save();
        return redirect('/ayudapage')->with('ayuda',$ayudas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ayudas = Ayuda::find($id);
        $ayudas ->delete();

        return redirect('/ayudapage')->with('ayuda', $ayudas);
    }
}
