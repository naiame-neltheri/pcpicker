<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;

class MenuController extends Controller {

	public function index() {
		return view('public.index');
	}

}