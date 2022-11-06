<?php
	namespace App\Http\Controllers;
	
	class UserController extends Controller 
	{
		public function show($city)
		{
        return view('user.show', ['city' => $city]);
		}
        public function all()
		{
			return view('user.all', ['title' => 'page title', 'text' => 'page content']);
		}
        public function name()
		{
			return view('user.name', ['title' => 'page title', 'text' => 'page content']);
		}
	}
?>
