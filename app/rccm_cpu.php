<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rccm_cpu extends Model
{
    protected $table = 'rccm_cpu';

    public function getAllDataByJson($name)
    {
    	if ($name === '') {
    		return $this::all();
    	} else {
    		return $this::whereRaw("LOWER(name) LIKE '%". strtolower($name)."%'")->get();
    	}
    }
}
