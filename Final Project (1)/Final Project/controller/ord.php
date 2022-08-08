<?php  
require_once ('../model/model.php');
session_start();

if (isset($_POST['order'])) {


                    
                  
	$data['Name']=$_SESSION['uname'];
   $data['Address']=$_SESSION['uadd'];
   $data['Email']= $_SESSION['uemail'];
   $data['PN']=$_SESSION['upn'];
   
   $data['Pname']=$_SESSION['upname'];
   
      

  if (order($data)) {
  	echo  "<h3><center>Order Confirmed</center></h3>"; 


  	
  
} else {
	echo 'You are not allowed to access this page.';
}
}

?>

<html>
<head>
</head>
<body>

  

    <a  href="../homepage.php"><button  type="button" class="btn btn-outline-light ">Go Back</button></a>



    </body>
    </html>
