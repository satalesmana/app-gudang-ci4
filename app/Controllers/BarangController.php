<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BarangController extends BaseController
{
    public function index()
    {
        echo "tes barang controller";
    }
	
	public function show($id){
		echo $id;
	}
	
	public function create(){
		echo "ini create function";
	}
}
