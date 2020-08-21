<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
  protected $fillable =['user_name','body'];
  public $table = "posts";

  public function user(){
    return $this->belongsTo(User::class);
  }
}
