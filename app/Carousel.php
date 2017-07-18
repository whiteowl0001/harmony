<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    //
     protected $table = 'carousel';
    protected $fillable = [
         'mime',
         'filename',
         'original_filename',
        ];
}
