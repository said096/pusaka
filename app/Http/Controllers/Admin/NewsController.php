<?php

namespace App\Http\Controllers\Panels;

class NewsController extends Controller {

	public function getCreateNews(){
		return view('admin.pages.create-news');
	}

	public function postCreateNews(){
		return view('admin.pages.news-list');
	}

}