<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Course;
use App\Slider;
use App\User;

class HomeController
{
	public function index()
	{

		return view('home');
	}
}
