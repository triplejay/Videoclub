<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;
class CatalogController extends Controller
{
    public function getIndex() {
        return view('catalog.index')->with('arrayPeliculas',movie::all());
    }
    public function getShow($id) {
        return view('catalog.show', array('id'=>movie::findOrFail($id)));
    }
    public function getCreate() {
        return view('catalog.create');
    }
    public function getEdit($id) {
        return view('catalog.edit', array('id'=>movie::findOrFail($id)));
    }
    public function postCreate(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->director = $request->input('Director');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');
        $movie->save();
        return redirect()->action('CatalogController@getIndex');
    }
    public function putEdit(Request $request, $id){
        $movie = movie::findOrFail($id);
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->director = $request->Director;
        $movie->poster = $request->poster;
        $movie->synopsis = $request->synopsis;
        $movie->save();
        return redirect('catalog/show/'.$id);
    }
}
