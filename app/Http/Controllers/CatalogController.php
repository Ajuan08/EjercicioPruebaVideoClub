<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex(){
        return view('layouts.catalog.index');
    }

    public function getShow($id){
        return view('layouts.catalog.show', array('id' => $id));
    }

    public function getCreate(){
        return view('layouts.catalog.create');
    }

    public function getEdit($id){
        return view('layouts.catalog.edit', array('id' => $id));
    }
}
