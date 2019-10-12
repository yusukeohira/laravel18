<?php
//課題17
namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
      'profiles_id' => 'required',
      'edited_at' => 'required',
    );
    
    public function profile() {
      return $this->belongsTo(Profile::class);
    }
}
