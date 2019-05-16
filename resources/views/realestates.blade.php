<!--親テンプレ読み込み-->
@extends('layouts.app')
@extends('layouts.header')
@section('content')

<div class="container-fluid">
    <div class="panel-body">
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
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

            <!-- 物件登録ボタン -->
            <!--<div class="form-group">-->
            <!--    <div>-->
            <!--        <button type="submit" class="btn btn-primary">-->
            <!--            <i class="glyphicon glyphicon-plus"></i> Save-->
            <!--        </button>-->
            <!--    </div>-->
            <!--</div>-->
        </form>
        
        <!-- 物件一覧 -->
        @if (count($realestates) > 0)
            <div class="panel panel-default">
                <!--<div class="panel-heading"> 物件一覧 </div>-->
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        
                        <!-- テーブルヘッダ -->
                        <thead> 
                            <!--<tr>-->
                            <!--    <th>物件名</th>-->
                            <!--    <th>住所</th>-->
                            <!--</tr>-->
                        </thead>
                        
                        <!-- テーブル本体 -->
                        <tbody>
                            @foreach ($realestates as $realestate)
                            <tr>
                                
                                <!-- 物件名＆住所 -->
                                <td class="table-text col-sm-4">
                                    <div>{{ $realestate->name }}</div>
                                    <div>{{ $realestate->address }}</div>
                                </td>
                                
                                <!-- Map表示 -->
                                <!-- <td>-->
                                <!--    <div class="col-sm-1 ">-->
                                <!--    <form action="{{ url('realestatesmap/'.$realestate->id) }}" method="POST">-->
                                <!--        {{ csrf_field() }}-->
                                <!--        <button type="submit" class="btn btn-primary ">-->
                                <!--            <i class="glyphicon glyphicon-pencil"></i> MAP -->
                                <!--        </button>-->
                                <!--    </form>-->
                                <!--    </div>-->
                                <!--</td>-->
                                
                                <!-- 物件更新ボタン --> 
                                <td>
                                    <div class="col-sm-1 ">
                                    <form action="{{ url('realestatesedit/'.$realestate->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary ">
                                            <i class="glyphicon glyphicon-pencil"></i> 更新 
                                        </button>
                                    </form>
                                    </div>
                                </td>
                                
                                <!-- 物件削除ボタン -->
                                <td>
                                    <div class="col-sm-1 ">
                                    <form action="{{ url('realestate/'.$realestate->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <!--{{ method_field('DELETE') }}-->
                                    
                                        <button type="submit" class="btn btn-danger ">
                                            <i class="glyphicon glyphicon-trash"></i> 削除
                                        </button>
                                    </form>
                                    </div>
                                </td>
                                
                            </tr>
                            @endforeach 
                        </tbody>
                    </table> 
                    
                    <!--ページネーション-->
                            <div>
                                <div class="col-md-4 col-md-offset-4">
                                <!--<div class="col-md-8">-->
                                {{ $realestates->links()}}
                                </div>
                            </div>
                </div>
            </div> 
        @endif
        
    </div>
</div>

@endsection