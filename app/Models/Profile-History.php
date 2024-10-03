<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile-History extends Model
{
    protected $table = 'ProfileHistory'; 
    // テーブル名を'Profile-History'から'ProfileHistory'に変更
    
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
}
