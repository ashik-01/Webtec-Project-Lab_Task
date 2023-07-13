<html>
<head>

</head>
<body>

<h2 style="text-align:center;"> LoGin</h2></br>


<div style="text-align:right;">

<a href="h.php"><button>Home</button></a>
<a href="signup.php"><button>Registration</button></a>


</div>

<?php                   
                              
 setcookie("Cname",'Login',time()+100000,"/");  

$emailErr =  $passErr = "";
$email = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
   

  if(empty($_POST["password"])){
 
    $passErr = "password is required";
  }

  else {
    $password = test_input($_POST["password"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;



  }

  ?>
  <?php
  session_start();
  
  $error='';
$message='';

if(isset($_POST["submit"]))  
	
 {  $data = file_get_contents("userdata.json");  
                          // echo $data;
                          $data = json_decode($data, true);
   
                                 
                     foreach($data as $row)
                          {  
                            

                                 
                          
                    
                           if($_POST["email"] == $row["Email"] && $_POST["password"] == $row["Password"])

                         {

                         header( 'Location: index.php');

                         $_SESSION['uname']=  $name; 
                         $_SESSION['uemail']=  $mail; 
                         $_SESSION['uadd']=  $add; 
                         $_SESSION['upn']=  $pn; 
                         $_SESSION['upass']=  $pass; 
                         $_SESSION['udob']=  $dob;   
                         $_SESSION['ugn']=  $gn;                           
                      

                         }
                       else{

                       $error = "<label class='text-danger'>Incorrect user email or password</label>"; 

                        }
                      }
                      }
                      else{

                        echo ' ';
                      }

               ?> 

                  







  <form style="text-align:center;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

 <div class="container" style="width:400px;"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

    Email: <input type="text" name="email" class="form-control" required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  Password: <input type="password" name="password" class="form-control" required>
  <span class="error">* <?php echo $passErr;?></span>
 
  <br><br>



  <input type="submit" name="submit" value="Submit" class="btn btn-info" >  <a href="forget.php">Change password</a>

       

                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>

                     <?php   
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>
</form>



</div>



</body>
</html>
