<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'vaccine', 'mode_of_adminstration', 'period', 'remarks'
    ];
}
