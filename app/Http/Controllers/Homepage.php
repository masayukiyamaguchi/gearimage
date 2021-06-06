<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use XIVAPI\XIVAPI;

class Homepage extends Controller
{
    //
    public function index(){
        $get_datas="";
        return view('index',["get_datas"=>$get_datas]);
    
    }

}
