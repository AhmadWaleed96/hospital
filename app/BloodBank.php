<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','national_id','address','hospital','age','weight','donornumber','birth_date','gender','mobile','blood_group','date','time','notes','type'
    ];
  
}
