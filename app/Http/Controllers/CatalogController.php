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
}
