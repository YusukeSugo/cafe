<?php

namespace App\Http\Controllers;

use App\Cafe;
use Illuminate\Http\Request;
use Storage;

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
    
    public function map(Cafe $cafe){
        return view('map')->with(['cafe' => $cafe]);
    }
    
    public function entry(){
        return view('entry');
    }
    
    
    public function store(Request $request, Cafe $cafe)
    {
        $form = $request->all();
        $image = $request->file('image');
        
        $path = Storage::disk('s3')->putFile('image', $image, 'public');
        $cafe->image_path = Storage::disk('s3')->url($path);
        
        $input = $request['cafe'];

        
        $cafe->fill($input)->save();
        return redirect('/cafes/' . $cafe->id);
    }

}
