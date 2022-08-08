<?php  
require_once '../model/model.php';


if (isset($_POST['createStudent'])) {

   $data['Name']=$_POST["fname"];
   $data['Email']=$_POST["email"];
   $data['Address']=$_POST["add"];
   $data['PN']=$_POST["pnumber"];
   $data['Password']=$_POST["np1"];
   $data['Dob']=$_POST["dob"];
   $data['Gender']=$_POST["gender"];

	
  if (signup($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>