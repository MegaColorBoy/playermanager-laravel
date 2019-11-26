<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $fillable = [
    	'FullName',
    	'UserName'
    ];
}
