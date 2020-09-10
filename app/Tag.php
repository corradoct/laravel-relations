<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $fillable= [
    'tag_word',
  ];

  public function albums() {
    return $this->belongsToMany('App\Album');
  }
}
