
<?php 
/*
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if (!preg_match("/^[a-zA-Z-' ]*$/",($_POST["fname"])))  
      {  
           $error = "<label class='text-danger'>Name,Only use letter.</label>";  
      }
      

      else if (!filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL)) 
      {  
           $error = "<label class='text-danger'>Enter an valide e-mail</label>";  
      } 
      else if(empty($_POST["add"]))  
      {  
           $error = "<label class='text-danger'>Enter Your address</label>";  
      }

      else if(empty($_POST["pnumber"]))  
      {  
           $error = "<label class='text-danger'>Enter Phone Number</label>";  
      }


     else if(empty($_POST["np1"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  

      elseif((strlen($_POST["np1"]))<8){

       $error="<label class='text-danger'>Password,Must enter 8 digit</label>";
     }


      else if(empty($_POST["rp1"]))  
      {  
           $error = "<label class='text-danger'>password is required</label>";  
      }  

      elseif(($_POST["rp1"])!=($_POST["np1"]))
     {
          $error = "<label class='text-danger'>Same password is required</label>"; 

      }

      else if (empty($_POST["dob"])) {
          $error = "<label class='text-danger'>Date Of Birt is required</label>";  
       } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
      else  
      {
   $_POST["fname"]=true;
   $_POST["email"]=true;
   $_POST["add"]=true;
   $_POST["pnumber"]=true;
   $_POST["np1"]=true;
   $_POST["dob"]=true;
   $_POST["gender"]=true;

      }  
 }
 */
 ?>  






 <!DOCTYPE html>  
 <html>  
      <head>  



           <title>Registration</title> 
           
     </head>  
      <body>  
        

   
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Registration</h3>                
                
                    <form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">
                   
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="fname" class="form-control" placeholder="Enter your Name,only letter" required /><br />  

                    

                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" placeholder="Enter your Email" required /><br />

                     <label>Address</label>
                     <input type="text" name = "add" class="form-control" placeholder="Enter your Address" required  /><br />


                     <label>Phone Number</label>
                     <input type="Number" name = "pnumber" class="form-control" required placeholder="Enter your Phone number" /><br />

                    
                     <label>Password</label>
                     <input type="password" name = "np1" class="form-control" placeholder="Must be 8 digit" required /><br />
                   
                     <label>Confirm Password</label>
                     <input type="password" name = "rp1" class="form-control" placeholder="Enter same Password"  required /><br />

                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male" >
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>

                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"  required > <br><br>
                    </fieldset> 
                     
                   

                     <input type="submit" name="createStudent" value="creat" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  

                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>

                </form>  
           </div>  
           <br />  
      </body>  
 </html>  