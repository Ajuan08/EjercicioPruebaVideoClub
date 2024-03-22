<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CatalogController;

class HomeController extends Controller
{
    public function getHome(){
        // dd('hoolaaa');
        return redirect()->action([CatalogController::class, 'getIndex']);
    }
}
