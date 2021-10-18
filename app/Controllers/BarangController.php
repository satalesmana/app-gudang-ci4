<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BarangController extends BaseController
{
    public function index()
    {
        $data['page'] = 'barang/index';
        return view('admin', $data);
    }
	
	public function show($id){
		echo $id;
	}
	
	public function create(){
		echo "ini create function";
	}
}
