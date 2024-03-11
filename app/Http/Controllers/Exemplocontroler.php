<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exemplocontroler extends Controller
{
    
//public function index(){
//    return view(view:'exemplo');
//}
}
Route::get('exemplo', 'App\http\Controllers\ExemploControler@index');
