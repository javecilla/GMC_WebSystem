<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller {

	public function index(Request $request) {
		return view('index');
	}
}