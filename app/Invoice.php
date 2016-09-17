<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['date', 'invoiceNum', 'buildingName', 'buildingAddress', 'repName', 'tenantName', 'unitNum', 'moveInDate', 'totalDue'];
}
