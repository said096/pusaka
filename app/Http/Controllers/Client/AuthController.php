<?php

namespace App\Http\Controllers;

class AuthController extends Controller {

	public function postSignin(Request $request){

	}

	public function getSignup(){
		return view('client.pages.signup');
	}

	public function postSignup(Request $request){

	}

}