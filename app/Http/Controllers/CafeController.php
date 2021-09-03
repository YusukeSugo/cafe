<?php

namespace App\Http\Controllers;

use App\Cafe;
use Illuminate\Http\Request;

class CafeController extends Controller
{
    /**
     * Cafe一覧を表示する
     * 
     * @param Cafe Cafeモデル
     * @return array  Cafeモデルリスト
     */
     public function index(Cafe $cafe){
         return view('index')->with(['cafes' => $cafe->get()]); 
     }
     
     /**
    * 特定IDのpostを表示する
    *
    * @params Object Cafe // 引数の$cafeはid=1のCafeインスタンス
    * @return Reposnse cafe view
    */
    public function detail(Cafe $cafe){
        return view('detail')->with(['cafe' => $cafe]);
    }
}
