<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
   protected $fillable = [
       'mark', 'model', 'engine', 'power', 'equipment', 'content'
   ];
}
