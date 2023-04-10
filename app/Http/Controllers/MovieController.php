<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies=Movie::all();
        return response()->json($movies);
    }
    public function show($id)
    {
        $movie=Movie::find($id);
        if($movie){
            return response()->json($movie);
        }else{
            return response()->json(['error'=>'Pelicula no encontrada'],404);
        }
    }
    public function create()
    {
        return view('movies.create');   
    }
    public function store(Request $request)
    {
        Movie::create([
            'title'=>request('title'),
            'synopsis'=>request('synopsis'),
            'year'=>request('year'),
            'cover'=>request('cover')
        ]);
        return request();
    }
    public function edit($id)
    {
        $movie=Movie::find($id);
        if($movie){
            return view('movies.edit',['movie'=>$movie]);
        }else{
            return response()->json(['error'=>'Pelicula no encontrada'],404);
        }
    }
    public function update(Request $request, $id)
    {
        $movie=Movie::findOrFail($id);
        $movie->title=$request->title;
        $movie->synopsis=$request->synopsis;
        $movie->year=$request->year;
        $movie->cover=$request->cover;
        $movie->save();
        return redirect('/movies/show/'.$id);
    }
    public function delete($id)
    {
        $movie=Movie::find($id);
        if($movie){
            $movie->delete();
            return redirect('/');
        }else{
            return response()->json(['error'=>'Pelicula no encontrada'],404);
        }
    }
}
