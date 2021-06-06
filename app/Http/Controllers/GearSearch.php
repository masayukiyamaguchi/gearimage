<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use XIVAPI\XIVAPI;

class GearSearch extends Controller
{
    //検索内容の受け取り
    public function index(Request $request){
        //バリデーションルールの設置
        // $request->validate([
        //     "name" => "required|alpha_num",
        // ]);
        
        // 検索条件を受け取る
        // $items = $_POST["select_gear_name"];
        $items = $_POST["search_gear_text"];

        // API利用の宣言
        $api = new \XIVAPI\XIVAPI();

        // データの抽出
        $seach_datas = file_get_contents("https://xivapi.com/search?string=".$items."&language=ja&indexes=Item&filters=ClassJobCategory.ID>0");
        $send_datas = json_decode($seach_datas);
        
        //検索のスピードを考え、データ全体の情報は取らない。
        // //IDだけ抽出
        // foreach($send_datas->Results as $send_data){
        //     $IDs[] = $send_data->ID;
        // }

        // // IDから詳細データを抽出
        // foreach($IDs as $ID){
        //     $item = $api->content->item()->one($ID);
        //     $list_gears[] = $item;
            
        // }
        return view('index',["get_datas"=>$send_datas]);
    }
}


