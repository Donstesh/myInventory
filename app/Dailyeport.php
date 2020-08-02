<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dailyeport extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'time', 'task', 'problem_encountered', 'report'
    ];
}
