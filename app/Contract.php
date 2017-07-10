<?php

namespace Contracts;

use Illuminate\Database\Eloquent\Model;
use Contracts\Customer;
use Contracts\Deliver;

class Contract extends Model
{
    
    protected $fillable = [
    	'customer_id',
    	'contract',
    	'iniDate',
    	'endDate',
    	'amountTotal',
    	'balance'
    ];

    //relations

    public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }

    public function deliver()
    {
    	return $this->hasMany(Deliver::class);
    }
}
