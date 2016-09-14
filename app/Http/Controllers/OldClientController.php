<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

// use App\Http\Controllers\mysqli;

// $servername = "localhost";
// $username = "username";
// $password = "Testword123";
// $dbname = "renta_dex";

// $mysqli = new mysqli("127.0.0.1", "root", "Testword123", "renta_dex");

// /* check connection */
// if ($mysqli->connect_errno) {
//     printf("Connect failed: %s\n", $mysqli->connect_error);
//     exit();
// }

class OldClientController extends Controller
{
	 public function index() {
        $page_title = 'Current Clients';
    		return view('client', compact('page_title')); 
    	}
    
}
