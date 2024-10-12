<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');
    // public/protected/private
    // ◯ $this->guarded
    // ✕ $guarded

    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
   
    public function histories()
    {
        return $this->hasMany('App\Models\History'); //newsテーブルに関連付いているhistoriesテーブルをすべて取得するというメソッド
        
        //今回のhistoriesテーブルは、newsテーブルの変更履歴を記録するために利用されます。
        //つまり、newsテーブルが更新されるタイミングでhistoriesテーブルが作成される
    }
}