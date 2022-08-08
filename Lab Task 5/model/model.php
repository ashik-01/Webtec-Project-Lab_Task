<?php 

require_once 'db_connect.php';



function signup($data){
	$conn = db_conn();


    $sql = "INSERT INTO user(Name, Email, Address, PN, Gender,Dob ,Password)
VALUES (:Name, :Email, :Address, :PN, :Password ,:Dob,:Gender)";
    try{
        $stmt = $conn->prepare($sql);
        $stmt->execute([

  ':Name' => $data['Name'],
  ':Email' => $data['Email'],
  ':Address' => $data['Address'],
   ':PN' =>$data['PN'],
  ':Password' => $data['Password'],
  ':Dob' => $data['Dob'],
  ':Gender' => $data['Gender']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

