<!DOCTYPE html> 
<html>
<head>


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
             <td>" .$row["Size"]."</td>
              <td></td>
              <td>" .$row["Piece"]."</td>
             
            </tr>";




    echo$row['Email'];
  require_once 'model/model.php';


if (isset($row['Email'])) {

    $email=$row['Email'];
    
    
  if ( deleteor($email)) {
     header( 'Location:../homepage.php');

   
    
} else {
    echo 'You are not allowed to access this page.';
}




}







        }
        echo "</table>";
    }
    else
    {
         header( 'Location:../homepage.php');
    }
    $conn-> close();




?>



</body>
</html>
