<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'news_id' => 'required',
        'index_at' => 'required',
    );
}
