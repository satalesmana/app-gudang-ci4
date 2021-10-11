<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UsersController extends BaseController
{
    public function index()
    {
        echo "ini halaman users";
    }
	
	public function show($id){
		echo $id;
	}
	
	public function create(){
		echo "ini create function";
	}
	
}
