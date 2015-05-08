<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

  protected $fillable = [

    'subject',
    'message',
    'user_id',
    'author'

  ];

  public function user(){
    return $this->belongsTo('App\User');
  }
}
