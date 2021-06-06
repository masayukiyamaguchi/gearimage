<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use XIVAPI\XIVAPI;

class GearPreview extends Controller
{
    //
    public function index(Request $request){
        $api = new \XIVAPI\XIVAPI();
        
        $name="lennath valkyrie";
        $server="pandaemonium";
        $page="1";
        $id=5036092;
        $data = $api->character->get($id, $data = [], $extended = false);

        $seach_datas = file_get_contents("https://xivapi.com/character/search?id=5036092");
        $send_datas = json_decode($seach_datas);

        dump($send_datas);

        $get_datas="";
        return view('index',["get_datas"=>$get_datas]);

    }
}
