<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\realestate; 
use Validator;

class RealestatesController extends Controller
{
    //物件一覧表示 
    public function index() {
        $realestates = Realestate::orderBy('created_at', 'asc')->get();
        return view('realestates', [
        'realestates' => $realestates
        ]);
    }
    
    //更新画面
    public function edit(Realestate $realestates) {
        return view('realestatesedit', [
            'realestates' => $realestates
        ]); 
    }
    
    //更新処理
    public function update(Request $request) 
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:40',
            'address' => 'max:40',
            'latitude' => 'max:40',
            'longitude' => 'max:40',
            'url_top' => 'max:40',
            'url_estate' => 'max:40',
        ]); 
        
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        $realestates = Realestate::find($request->id);
        $realestates->name   = $request->name;
        $realestates->address = $request->address;
        $realestates->latitude = $request->latitude;
        $realestates->longitude  = $request->longitude;
        $realestates->url_top  = $request->url_top;
        $realestates->url_estate  = $request->url_estate;
        $realestates->save();
        return redirect('/');
    }
    
    
    //登録
    public function store(Request $request) {
        //バリデーション
        $validator = Validator::make($request->all(), [
                'name' => 'required|max:40',
                'address' => 'max:40',
                'latitude' => 'max:40',
                'longitude' => 'max:40',
                'url_top' => 'max:40',
                'url_estate' => 'max:40',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
                return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        // 物件登録処理
        $realestates = new Realestate;
        $realestates->name   = $request->name;
        $realestates->address = $request->address;
        $realestates->latitude = $request->latitude;
        $realestates->longitude  = $request->longitude;
        $realestates->url_top  = $request->url_top;
        $realestates->url_estate  = $request->url_estate;
        $realestates->save();
        return redirect('/');
    }
    
    //削除処理
    public function destroy(Realestate $realestates) {
        $realestates->delete();
        return redirect('/');
    }
}
