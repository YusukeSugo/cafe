<?php

namespace App\Http\Controllers;

use App\Cafe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;

class CafeController extends Controller
{
     
     
    public function index(Cafe $cafe, Request $request)
    {
        #キーワード受け取り
        $keyword = $request->input('keyword');
 
        #クエリ生成
        $query = Cafe::query();
        
        
        if(!empty($keyword))
        {
            $query->where('prefecture','like','%'.$keyword.'%');
        }
 
        $cafe = $query->paginate(6);
        return view('index')->with(['cafes' => $cafe])
        ->with('keyword',$keyword);
    }
     
     /**
    * 特定IDのpostを表示する
    *
    * @params Object Cafe // 引数の$cafeはid=1のCafeインスタンス
    * @return Reposnse cafe view
    */
    public function detail(Cafe $cafe)
    {
        return view('detail')->with(['cafe' => $cafe]);
          
    }
    
    public function map(Cafe $cafe)
    {
        return view('map')->with(['cafe' => $cafe]);
    }
    
    public function entry()
    {
        return view('entry');
    }
    
    
    public function store(Request $request, Cafe $cafe)
    {
        $form = $request->all();
        $image = $request->file('image');
        
        $path = Storage::disk('s3')->putFile('image', $image, 'public');
        $cafe->image_path = Storage::disk('s3')->url($path);
        
        $input = $request['cafe'];
        
        $cafe->user_id = Auth::id();
        
        $cafe->fill($input)->save();
        return redirect('/cafes/' . $cafe->id);
    }
    
    public function edit(Cafe $cafe)
    {
        return view('edit')->with(['cafe' => $cafe]);
    }
    
    public function update(Request $request, Cafe $cafe)
    {
        $form = $request->all();
        $image = $request->file('image');
        
        $path = Storage::disk('s3')->putFile('image', $image, 'public');
        $cafe->image_path = Storage::disk('s3')->url($path);
        
        $input = $request['cafe'];
        
        $cafe->user_id = Auth::id();
        
        $cafe->fill($input)->save();
        return redirect('/cafes/' . $cafe->id);
    }
}
