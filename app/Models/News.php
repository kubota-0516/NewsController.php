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
        return $this->hasMany('App\Models\History');
    }
}

class Profile extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');
    // public/protected/private
    // ◯ $this->guarded
    // ✕ $guarded

    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby'=> 'required',
        'introduction'=> 'required',
    );
   
    public function histories()
    {
        return $this->hasMany('App\Models\Index');
    }
}