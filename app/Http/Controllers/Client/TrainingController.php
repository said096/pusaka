<?php

namespace App\Http\Controllers;

class TrainingController extends Controller {

	public function getTrainingInfo(){
		return view('client.pages.training-info');
	}

	public function getTrainingRegister(){
		return view('client.pages.training-register');
	}

	public function postTrainingRegister(Request $request){
		
	}

}