<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;//usamos el modelo creado

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all(); //trae todos los registro de la tabla
        return view('video.index')->with('videos', $videos);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //capturamos los valores y guardamos 
        $videos = new Video();
        $videos->dificultad = $request->get('dificultad');
        $videos->descripcion = $request->get('descripcion');
        $videos->urlvideo = $request->get('urlvideo');
    
        //guardamos todo 
        $videos->save();
        return redirect('/videos');
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
        $video = Video::find($id);
        return view('video.show')->with('video', $video);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit2($id)
    {
        $video = Video::find($id);
        return view('video.show')->with('video', $video);
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
        //traemos un solo video por el id
        $video = Video::find($id);
       //capturamos los valores y guardamos 

       $video->dificultad = $request->get('dificultad');
       $video->descripcion = $request->get('descripcion');
       $video->urlvideo = $request->get('urlvideo');
   
       //guardamos todo 
       $video->save();
       return redirect('/videos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //traemos un solo video por el id
        $video = Video::find($id);
        $video->delete();
        return redirect('/videos');
    }
}
