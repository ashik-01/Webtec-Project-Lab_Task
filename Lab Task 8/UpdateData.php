
 <!DOCTYPE html>  
 <html>  
      <head>  
  <title>Edit Profile</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script>       
function validate1() {
  let x = document.forms["update"]["email"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
}

function validate2() {
  let y = document.forms["update"]["pn"].value;
  if (y == "") {
    alert("Password must be filled out");
    return false;
  }
}

function validate3() {
  let a = document.forms["update"]["name"].value;
  if (a == "") {
    alert("Name must be filled out");
    return false;
  }
}

function validate4() {
  let b = document.forms["update"]["add"].value;
  if (b == "") {
    alert("Address must be filled out");
    return false;
  }
}
function validate5() {
  let c = document.forms["update"]["pass"].value;
  if (c == "") {
    alert("Phone Number must be filled out");
    return false;
  }
}
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

     </head>  
      <body class="bg-warning col-lg-11.5 m-4">  
        

 <nav class="navbar navbar-expand-sm bg-success navbar-dark">

<h1>Update Information</h1> 
<div  style="text-align:right;">
<ul class="navbar-nav ml-auto ">
   <h3> .... </h3>
    <h3 class="nav-item active"><a class="nav-link"href="MainHome.php">Home Page</a></h3>
     <h3> .... </h3>
  <h3 class="nav-item"><a class="nav-link"  href="UserLogin.php" onclick="log()">Log out</a> </h3>


</ul>
</div>
</nav>

<div class="col-lg-10">
                 
                   <form name="update" action="controller/UpdateUser.php" method="POST" enctype="multipart/form-data"onsubmit="return validate1(),validate2(),validate3(),validate4(),validate5()">

 <?php     
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?> 
<?php

session_start();
                $_SESSION['uname'];
                 
        $_SESSION['uemail'];
                 $_SESSION['uadd'];
      
                $_SESSION['upn'];
                     
              $_SESSION['upass']; 

 


?>

                     <br /> 
                      <div class="container" style="width:400px;"> 



  <input  type="hidden" value="<?php echo$_SESSION['uemail']?>" class="form-control" name="email" ><br>

  <label for="name">Name:</label><br>
  <input value="<?php echo$_SESSION['uname']?>" type="text"  class="form-control" name="name" placeholder="Enter your New Name"><br>

  <label for="add">Address:</label><br>
  <input value="<?php echo$_SESSION['uadd']?>" type="text"  class="form-control" name="add" placeholder="Enter your New Address"><br>


  <label for="pn">Phone Number:</label><br>
  <input value="<?php echo$_SESSION['upn']?>" type="text"  class="form-control" name="pn" placeholder="Enter your New Phone Number"><br>
  
  <label for="pass">Password:</label><br>
  <input value="<?php echo$_SESSION['upass']?>" type="text"  class="form-control" name="password" placeholder="Enter your New Password"><br>

  <input type="submit" name = "UpdateUser" class="btn-outline-primary" value="Update">

  <input class="btn-outline-primary" type="reset"> 
       
 </div> 

                    

                </form> 
               
             
           </div>  
           <br />  
      </body>  
 </html>  
