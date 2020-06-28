<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
    	'name', 'sign', 'rate', 'acronym'
    ];
}
