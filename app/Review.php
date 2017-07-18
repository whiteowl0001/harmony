<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    //
      protected $table = 'review';
    protected $fillable = [
         'month',
         'day',
         'year',
         'stars',
         'reviewed_by',
         'project_title',
         'project_description',
        ];
}
