<!DOCTYPE html> 
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script>
function log() {
  alert("Dont Go :) ....Are You Sure you want to go !");
}
</script>

</head>
<body class="bg-warning col-lg-11.5">




 <nav class="navbar navbar-expand-sm bg-success navbar-dark">

<h1>ProsGuid Session</h1> 
<div  style="text-align:right;">
<ul class="navbar-nav ml-auto ">
     <h3> .... </h3>
    <h3 class="nav-item active"><a class="nav-link"href="homepage.php">Home</a></h3>
    <h3> .... </h3>

 <h3 class="nav-item"><a class="nav-link"  href="UserProfile.php">profile</a> </h3>
     <h3> .... </h3>

    <h3  class="nav-item"><a class="nav-link"  href="UserLogin.php" onclick="log()">Log out</a></h3>



</ul>
</div>
</nav>

<table>
    <tr>
         <th>ID</th>
           <th></th>
        <th>Name</th>
        <th></th>
         <th>Address</th>
         <th></th>
          <th>Email</th>
          <th></th>
           <th>Phone Number</th>
           <th></th>
            <th>Product Name</th>
            <th></th>
             
          </tr>



<?php

session_start();


   $conn= mysqli_connect("localhost","root","","final_project");

if($conn-> connect_error){
    die("Connection failed:".$conn-> connect_error);
}
    $sql = "SELECT * FROM orderlist";

    $result = $conn-> query($sql);

    if($result-> num_rows > 0)
    {
        while($row = $result-> fetch_assoc() ) 
        {


            echo "<tr>
            <td>" .$row["ID"]."</td>
              <td></td>
            <td>" .$row["Name"]."</td>
            <td></td>
            <td>" .$row["Address"]."</td>
             <td></td>
            <td>" .$row["Email"]."</td>
             <td></td>
            <td>" .$row["PN"]."</td>
             <td></td>
            <td>" .$row["ProductName"]."</td>
             <td></td>
             
             
            </tr>";




    $row['Email'];
  require_once 'model/model.php';


if (isset($row['Email'])) {

    $email=$row['Email'];
    
    
  if ( deleteor($email)) {
     //header( 'Location:../homepage.php');

    //echo 'YOUR List';
    
} else {
    echo 'You are not allowed to access this page.';
}




}







        }
        echo "</table>";
    }
    else
    {
        echo " 0 result";
    }
    $conn-> close();




?>




</table>
<br><br>

 

<a href="controller/ordelete.php"><button class="btn btn-success" >Cancel  order</button>



</body>
</html>
<br><br>
<br><br>
<br><br>
<br><br>
<?php
include"footer.php";
?>