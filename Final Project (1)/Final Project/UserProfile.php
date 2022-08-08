<?php
session_start();
   
               $_SESSION['uname'];
                 
                $_SESSION['uemail'];
        
               $_SESSION['uadd'];
      
               $_SESSION['upn'];
                     
                $_SESSION['udob'];
                  
                $_SESSION['ugn'];
                    
                $_SESSION['upass'];
                 
                       

?>
<!DOCTYPE html> 
<html>
<head>



   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script>
function log() {
  alert("Dont Go :) ....Are You Sure you want to go !");
}




</script>
     
</head>



<body class="bg-warning col-lg-11.5">

 <nav class="navbar navbar-expand-sm bg-success navbar-dark">

<h1>Profile</h1> 
<div  style="text-align:right;">
<ul class="navbar-nav ml-auto ">
     <h3> .... </h3>
    <h3 class="nav-item active"><a class="nav-link"href="homepage.php">Home</a></h3>
    <h3> .... </h3>

 <h3 class="nav-item"><a class="nav-link"  href="EditProfile.php">Edit Profile</a> </h3>
     <h3> .... </h3>

    <h3  class="nav-item"><a class="nav-link"  href="UserLogin.php" onclick="log()">Log out</a></h3>





</ul>
</div>
</nav>


<?php

   


                 echo"<h5>Name:</h5>"; 
                 echo$_SESSION['uname'];
                 
                   
                 echo "<h5>E-mail :</h5>";
                echo $_SESSION['uemail'];
                   
                 echo "<h5>Adderss :</h5>";
                 echo$_SESSION['uadd'];
                    
                 echo"<h5>Phone Number :</h5>";
                 echo$_SESSION['upn'];
                     
                 echo"<h5>Date of birth :</h5>";
                 echo$_SESSION['udob'];
                  
                 echo"<h5>Gender :</h5>";
                 echo$_SESSION['ugn'];
                    
                 echo"<h5>Password :</h5>";
                 echo$_SESSION['upass'];
                 
              
                 
                    
              

?>
                          
 




</body>
</html>
<?php
include"footer.php";
?>