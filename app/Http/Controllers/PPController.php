<?php

namespace App\Http\Controllers;

use App\pfp_cpu;
use App\rccm_cpu;
use Illuminate\Http\Request;

class PPController extends Controller
{
    public function index()
    {
        return view('back.pfp');
    }

    public function getRec_CPU()
    {
    	$all_rccm_cpu = new rccm_cpu;
    	$all_rccm_cpu = $all_rccm_cpu->getAllDataByJson('')->toJson();

    	return $all_rccm_cpu;
    }
}
