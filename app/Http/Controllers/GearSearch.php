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
        $items = $_POST["select_gear_name"];

        // API利用の宣言
        $api = new \XIVAPI\XIVAPI();

        // データの抽出
        $seach_datas = file_get_contents("https://xivapi.com/search?string=".$items."&language=ja");
        $send_datas = json_decode($seach_datas);

        return view('index',["get_datas"=>$send_datas]);
    }
}
