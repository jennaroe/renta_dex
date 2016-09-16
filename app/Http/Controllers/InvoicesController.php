<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class InvoicesController extends Controller
{
  	public function index() {
        $page_title = 'Invoices';
    		return view('invoices', compact('page_title')); 
    	}

    public function data() {
        $data['invoice'] = [
                
                
        ];
        return view('invoices')->with($data);

    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
