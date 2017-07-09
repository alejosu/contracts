<?php

namespace Contracts;

use Illuminate\Database\Eloquent\Model;
use Contracts\Contract;

class Customer extends Model
{
    
    protected $fillable = [
    	'nit',
    	'name',
    	'phone',
    	'address',
    	'adminName'
    ];

    public function contracts()
    {
    	return $this->hasMany(Contract::class);
    }
}
