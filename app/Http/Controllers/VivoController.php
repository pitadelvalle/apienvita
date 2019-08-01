<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vivo;
class VivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('vivos');
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
        $vivo = new Vivo();
        $vivo->title = $request->input('title');
        $vivo->descripcion= $request->input('descripcion');
    
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('uploads/vivos/',$filename);
            $vivo->image = $filename;
        }else{
            return $request;
            $vivo->image = '';
        }

        $vivo->save();
        return View('vivos')->with('vivos',$vivo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function display(){

        $vivos = Vivo::all();
        return View('vivoform')->with('vivos',$vivos);
    }
    public function edit($id)
    {
        $vivos = Vivo::find($id);
        return View('vivoupdate')->with('vivos',$vivos);
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
        $vivos = Vivo::find($id);
        $vivos->title = $request->input('title');
        $vivos->descripcion= $request->input('descripcion');
    
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('uploads/vivos/',$filename);
            $vivos->image = $filename;
        }

        $vivos->save();
        return redirect('/vivospage')->with('vivos',$vivos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $vivos = Vivo::find($id);
        $vivos->delete();

        return redirect('/vivospage')->with('vivos', $vivos);
    }
}
