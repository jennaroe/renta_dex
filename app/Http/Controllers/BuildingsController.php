<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Yajra\Datatables\Datatables;





class BuildingsController extends Controller
{
    public function index() {
        $page_title = 'Buildings';
    		return view('buildings', compact('page_title')); 
    	
	}
}


