<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //defining data field in model
    protected $fillable = [
        'name','phone','address'
    ];
}
