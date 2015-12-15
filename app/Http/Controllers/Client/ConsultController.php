<?php

namespace App\Http\Controllers;

class ConsultController extends Controller {

	public function getConsult(){
		return view('client.pages.consult');
	}

}