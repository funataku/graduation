@extends('layouts.app')
@section('register')
<div class="panel-body">
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        
        
        <!-- 物件登録フォーム -->
        <form action="{{ url('realestates') }}" method="POST" class="form-horizontal">
            
            {{ csrf_field() }}
            
            <!-- 物件のタイトル -->
            <div class="form-group">
                
                <div class="form-inline">
                    <label for="name" class="col-sm-2 control-label">物件名</label>
                    <input type="text" name="name" id="name" class="col-sm-6 form-control">
                </div>
                
                <div class="form-inline">
                    <label for="address" class="col-sm-2 control-label">住所</label>
                    <input type="text" name="address" id="address" class="col-sm-6 form-control">
                </div>
                
                <div class="form-inline">
                    <label for="latitude" class="col-sm-2 control-label">緯度</label>
                    <input type="text" name="latitude" id="latitude" class="col-sm-6 form-control">
                </div>
                
                <div class="form-inline">
                    <label for="longitude" class="col-sm-2 control-label">経度</label>
                    <input type="text" name="longitude" id="longitude" class="col-sm-6 form-control">
                </div>
                
                <div class="form-inline">
                    <label for="url_top" class="col-sm-2 control-label" >管理会社URL</label>
                    <input type="text" name="url_top" id="url_top" class="col-sm-6 form-control">
                </div>
                
                <div class="form-inline">
                    <label for="url_estate" class="col-sm-2 control-label">物件詳細URL</label>
                    <input type="text" name="url_estate" id="url_estate" class="col-sm-6 form-control">
                </div>
                
                <div>
                    &nbsp;
                </div>
                
                <div class="form-inline">
                <button type="submit" class="btn btn-primary col-sm-2">
                        <i class="glyphicon glyphicon-plus"></i> 追加
                </button>
                </div>
                
            </div>

        </form>
</div>
@endsection