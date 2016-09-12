<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moveins extends Model
{
    // protected $primaryKey = 'moveinId';
    // protected $table = 'moveIns';
    protected $fillable = ['clientName', 'building', 'unitNum', 'rentalRate', 'Commission', 'moveInDate', 'Status', 'listingAgent', 'Notes'];
}
