<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\realestate; 
use Validator;

class RealestatesController extends Controller
{
    // コンストラクタ(最初に処理される箇所) 
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    
    
    //物件一覧表示 
    public function index() {
        $realestates = Realestate::orderBy('id', 'desc')->paginate(5);
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
            'update_name' => 'required|max:40',
            'update_address' => 'max:100',
            'update_latitude' => 'max:100',
            'update_longitude' => 'max:100',
            'update_url_top' => 'max:300',
            'update_url_estate' => 'max:300',
        ]); 
        
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        $realestates = Realestate::find($request->id);
        $realestates->name   = $request->update_name;
        $realestates->address = $request->update_address;
        $realestates->latitude = $request->update_latitude;
        $realestates->longitude  = $request->update_longitude;
        $realestates->url_top  = $request->update_url_top;
        $realestates->url_estate  = $request->update_url_estate;
        $realestates->save();
        return redirect('/');
    }
    
    
    //登録
    public function store(Request $request) {
        //バリデーション
        $validator = Validator::make($request->all(), [
                'name' => 'max:40',
                'address' => 'max:100',
                'latitude' => 'max:100',
                'longitude' => 'max:100',
                'url_top' => 'max:300',
                'url_estate' => 'max:300',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
                return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        // 物件登録処理
        $realestates = new Realestate;
        $realestates->name = $request->name;
        $realestates->address = $request->address;
        $realestates->latitude = $request->latitude;
        $realestates->longitude = $request->longitude;
        $realestates->url_top = $request->url_top;
        $realestates->url_estate = $request->url_estate;
        $realestates->save();
        return redirect('/');
    }
    
    //削除処理
    public function destroy(Realestate $realestate) {
        $realestate->delete();
        return redirect('/');
    }
    
    //map
    // public function map(Realestate $realestates){
    //     $realestates = Realestate::find($realestates->id);
    //     $address = $realestates->address;
    //     $url = 'http://maps.google.co.jp/?q='.urlencode($address);
    //     return Redirect::away($url);
    // }
        
    
}
