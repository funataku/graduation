@extends('layouts.app')
@extends('layouts.header')
@section('content') 


<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        @include('common.errors')
        
        <form action="{{ url('realestates/update') }}" method="POST">
            <!-- 物件名 -->
            <div class="form-group">
                <label for="name">物件名</label>
                <input type="text" id="update_name" name="update_name" class="form-control" value="{{$realestates->name}}">
            </div>
            
            <!-- 住所 -->
            <div class="form-group">
                <label for="address">住所</label>
                <input type="text" id="update-address" name="update_address" class="form-control" value="{{$realestates->address}}">
            </div>
            
            <!-- 緯度 -->
            <div class="form-group">
                <label for="latitude">緯度</label>
                <input type="text" id="update-latitude" name="update_latitude" class="form-control" value="{{$realestates->latitude}}">
            </div>
            
            <!-- 経度 -->
            <div class="form-group">
                <label for="longitude">経度</label>
                <input type="text" id="update-longitude" name="update_longitude" class="form-control" value="{{$realestates->longitude}}"/>
            </div>
            
            <!-- 管理会社URL -->
            <div class="form-group">
                <label for="url_top">管理会社URL</label>
                <input type="text" id="update-url_top" name="update_url_top" class="form-control" value="{{$realestates->url_top}}"/>
            </div>
            
            <!-- 物件詳細URL -->
            <div class="form-group">
                <label for="url_estate">物件詳細URL</label>
                <input type="text" id="update-url_estate" name="update_url_estate" class="form-control" value="{{$realestates->url_estate}}"/>
            </div>
            
            <!-- Saveボタン/Backボタン-->
            <div class="well well-sm">
                <button type="submit" class="btn btn-primary">Save</button>
                <a class="btn btn-link pull-right" href="{{ url('/') }}">
                <i class="glyphicon glyphicon-backward"></i> Back
                </a> 
            </div>
            
            <!-- id 値を送信 -->
            <input type="hidden" name="id" value="{{$realestates->id}}" />
            
            <!-- CSRF -->
            {{ csrf_field() }}
           
        </form>
    </div> 
</div>
</div>
@endsection