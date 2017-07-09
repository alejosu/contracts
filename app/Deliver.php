<?php

namespace Contracts;

use Illuminate\Database\Eloquent\Model;
use Contracts\Contract;

class Deliver extends Model
{
    public function contract()
    {
    	return $this->hasOne('Contract');
    }
}
