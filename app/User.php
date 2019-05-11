<?php

namespace App;
// Model/モデル:
// Web システムの中でデータ連携処理などをモデルが扱います。
// Web システムのデータを扱う本体部分になります。
// DBから必要な情報を抽出、登録、 更新、削除などをおこうのが主な処理内容です。


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
