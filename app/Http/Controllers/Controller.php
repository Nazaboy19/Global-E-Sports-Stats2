<?php

namespace TestApp\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use TestApp\Http\Controllers\Controller;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     
     
    public function index()
    {
        $users = DB::table('users')->get();

        return view('user.index', ['users' => $users]);
    }
}

	 function users() {
       $servername = "127.0.0.1";
       $username = "root";
       $password = "Ahmed123$";
       $dbname = "GEES_db";

       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }


       $data= $_POST;
       $userName= $data['clientName'];
       
       $userEmail= $data['userEmail'];
       $numRooms= $data['numRooms'];
       $userPass= $data['userPass'];
       
     
       //print_r($data);

       //return view('client')->with($data);

       $sql = "INSERT INTO users (userNameName,  userEmail,  userPass,) VALUES ('$clientName','$clientNum','$userEmail','$numRooms','$userPas)";

       if (mysqli_query($conn, $sql)) {
           echo "New record created successfully";
       } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }

       mysqli_close($conn);    
       
   }
   



