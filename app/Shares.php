<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shares extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_joined', 'name', 'detail', 'amount_contributed', 'id_no', 'phone_no', 'next_of_kin', 'mode_of_payment'
    ];
}
