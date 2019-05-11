<!--親テンプレ読み込み-->
@extends('layouts.app')
@section('content')
    <div class="panel-body">
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
        <!-- 物件登録フォーム -->
        <form action="{{ url('realestates') }}" method="POST" class="form-horizontal">
            
            {{ csrf_field() }}
            
            <!-- 物件のタイトル -->
            <div class="form-group">
                
                <div class="col-sm-6">
                    <label for="name" class="col-sm-3 control-label">物件名</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="address" class="col-sm-3 control-label">住所</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="latitude" class="col-sm-3 control-label">緯度</label>
                    <input type="text" name="latitude" id="latitude" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="longitude" class="col-sm-3 control-label">経度</label>
                    <input type="text" name="longitude" id="longitude" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="url_top" class="col-sm-3 control-label">管理会社URL</label>
                    <input type="text" name="url_top" id="url_top" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="url_estate" class="col-sm-3 control-label">物件詳細URL</label>
                    <input type="text" name="url_estate" id="url_estate" class="form-control">
                </div>
                
            </div>

            <!-- 物件登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="glyphicon glyphicon-plus"></i> Save
                    </button>
                </div>
            </div>
        </form>
        
        <!-- 物件一覧 -->
        @if (count($realestates) > 0)
            <div class="panel panel-default">
                <div class="panel-heading"> 物件一覧 </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        
                        <!-- テーブルヘッダ -->
                        <thead> 
                            <th>物件一覧</th>
                            <th>&nbsp;</th>
                        </thead>
                        
                        <!-- テーブル本体 -->
                        <tbody>
                            @foreach ($realestates as $realestate)
                            <tr>
                                
                                <!-- 物件名 -->
                                <td class="table-text">
                                    <div>{{ $realestate->name }}</div>
                                </td>
                                
                                <!-- 物件更新ボタン --> 
                                <td>
                                    <form action="{{ url('realestatesedit/'.$realestate->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                            <i class="glyphicon glyphicon-pencil"></i> 更新 
                                        </button>
                                    </form>
                                </td>
                                
                                <!-- 物件削除ボタン -->
                                <td>
                                    <form action="{{ url('realestate/'.$realestate->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    
                                        <button type="submit" class="btn btn-danger">
                                            <i class="glyphicon glyphicon-trash"></i> 削除
                                        </button>
                                    </form>
                                </td>
                                
                            </tr>
                            @endforeach 
                        </tbody>
                    </table> 
                </div>
            </div> 
        @endif
        <!-- 物件一覧end -->
                    
                    
                    
                    
                    
                    
    </div>
                <!-- Book: 既に登録されてる物件のリスト -->
@endsection