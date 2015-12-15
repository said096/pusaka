<?php

namespace App\Http\Controllers;

class BookController extends Controller {

	public function getBook(){
		return view('client.pages.book');
	}

}  