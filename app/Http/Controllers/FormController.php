<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\mysqli;

// $servername = "127.0.0.1";
// $username = "root";
// $password = "Testword123";
// $dbname = "renta_dex";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $mysqli = new mysqli("127.0.0.1", "root", "Testword123", "renta_dex");

// /* check connection */
// if ($mysqli->connect_error) {
//     printf("Connect failed: %s\n", $mysqli->connect_error);
//     exit();
// }

class FormController extends Controller
{
     public function clients() {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "Testword123";
        $dbname = "renta_dex";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }


        $data= $_POST;
        $clientName= $data['clientName'];
        $clientNum= $data['clientNum'];
        $moveInDate= $data['moveInDate'];
        $numRooms= $data['numRooms'];
        $numBaths= $data['numBaths'];
        $Pets= $data['Pets'];
        $numPets= $data['numPets'];
        $petType= $data['petType'];
        $activeClient= $data['activeClient'];
        $Notes= $data['Notes'];
      
        //print_r($data);

        //return view('client')->with($data);

        $sql = "INSERT INTO clients (clientName, clientNum, moveInDate, numRooms, numBaths, Pets, numPets, petType, activeClient, Notes) VALUES ('$clientName','$clientNum','$moveInDate','$numRooms','$numBaths','$Pets','$numPets','$petType','$activeClient','$Notes')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);    
        
    }
    
}

?>



  
 
















