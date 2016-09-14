<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'clients';
    protected $fillable = ['clientName', 'clientNum', 'email', 'moveInDate', 'budget', 'numRooms', 'numBaths', 'pets', 'clientStatus'];
}
