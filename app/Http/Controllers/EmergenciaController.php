<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emergencia;

class EmergenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('emergencia');
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
        $emergencia = new Emergencia();
        $emergencia ->title = $request->input('title');
        $emergencia ->descripcion= $request->input('descripcion');
    
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('uploads/emeregencias/',$filename);
            $emergencia ->image = $filename;
        }else{
            return $request;
            $emergencia ->image = '';
        }

        $emergencia ->save();
        return View('emergencia')->with('emergencia',$emergencia);
    }
    public function display(){

        $emergencias = Emergencia::all();
        return View('emergenciaform')->with('emergencia',$emergencias);
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
    public function edit($id)
    {
        $emergencias = Emergencia ::find($id);
        return View('emergenciaupdate')->with('emergencia',$emergencias);
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
        $emergencias = Emergencia::find($id);
        $emergencias->title = $request->input('title');
        $emergencias->descripcion= $request->input('descripcion');
    
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('uploads/emergencias/',$filename);
            $emergencias->image = $filename;
        }

        $emergencias->save();
        return redirect('/emergenciaspage')->with('emerengencia',$emergencias);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $emergencias = Emergencia::find($id);
        $emergencias->delete();

        return redirect('/emergenciaspage')->with('emergencia', $emergencias);
    }
}
