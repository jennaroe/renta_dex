<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
	protected $table = 'Tours';
    protected $fillable = ['tourName', 'tourDescript', 'tourTime'];
}
