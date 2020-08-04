<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'detail', 'quantity', 'requisition_amount', 'category', 'status'
    ];
}
