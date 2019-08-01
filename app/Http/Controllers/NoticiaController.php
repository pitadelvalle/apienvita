<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('noticias');
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
        $noticia = new Noticia();
        $noticia->title = $request->input('title');
        $noticia->descripcion= $request->input('descripcion');
    
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('uploads/noticias/',$filename);
            $noticia->image = $filename;
        }else{
            return $request;
            $noticia->image = '';
        }

        $noticia->save();
        return View('noticias')->with('noticias',$noticia);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function display(){

        $noticias = Noticia::all();
        return View('noticiasform')->with('noticias',$noticias);
    }
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticias = Noticia::find($id);
        return View('noticiasupdate')->with('noticias',$noticias);
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
        $noticias = Noticia::find($id);
        $noticias->title = $request->input('title');
        $noticias->descripcion= $request->input('descripcion');
    
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('uploads/noticias/',$filename);
            $noticias->image = $filename;
        }

        $noticias->save();
        return redirect('/noticiaspage')->with('noticias',$noticias);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $noticias = Noticia::find($id);
        $noticias->delete();

        return redirect('/noticiaspage')->with('noticias', $noticias);
    }
}
