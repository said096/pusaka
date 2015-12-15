<?php

namespace App\Http\Controllers\Panels;

class DashboardController extends Controller {

	public function getDashboard(){
		return view('admin.pages.dashboard');
	}

}