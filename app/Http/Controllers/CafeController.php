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
     * @return array  Postモデルリスト
     */
     public function index(Cafe $cafe){
         return $cafe->get();
     }
}
