<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
      'name' => 'required',
      'gender' =>'required',
      'hobby' =>'required',
      'introduction' =>'required',
      );
      
    public function user() {
      return $this->belongsTo(User::class);
    }
    
    //課題17
    public function histories()
    {
      return $this->hasMany('App\ProfileHistory');
    }
}
