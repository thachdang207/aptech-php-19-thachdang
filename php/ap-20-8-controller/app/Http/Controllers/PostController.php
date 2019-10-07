<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    function baiBao($id,$name){
        return view('bao',["baiBaoSo"=>$id,"name"=>$name]);
    }
}
