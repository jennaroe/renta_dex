<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AcctInfoController extends Controller
{
    public function index() {
        $page_title = 'Profile';
    		return view('acctInfo', compact('page_title')); 
    	}

    public function data() {
        $data['Acct'] = [
                
                
        ];
        return view('acctInfo')->with($data);

    }
}
