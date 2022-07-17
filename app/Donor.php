<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','national_id','address','hospital','donornumber','blood_group','qty','type'
    ];
}
