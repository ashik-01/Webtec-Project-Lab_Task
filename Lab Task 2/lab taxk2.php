<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <style>
        #filename {
            position: relative;
            top: 20px;
            left: 300px;
            font-weight: bolder;
        }
    </style>
</head>
<body>

    <?php 
        $firstname = "";
        $firstnameErrMsg = "";

        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            function test_input($data) {
                $data = htmlspecialchars($data);
                return $data;
            }

            $firstname = test_input($_POST['firstname']);
            $email = test_input($_POST['email']);
            $gender = isset($_POST['gender']) ? test_input($_POST['gender']) : "";
            
            

            $message = "";
            if (empty($firstname)) {
                $firstnameErrMsg = "First Name is Empty";
            }
            else {
                if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
                $firstnameErrMsg = "Only letters and spaces allowed.";
                }
            }
            
            
            
            
            if (empty($email)) {
                $message .= "Email is Empty";
                $message .= "<br>";
            }
            else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $message .= "Please correct email.";
                    $message .= "<br>";
                }
            }


            if (empty($gender)) {
                $message .= "Gender not Selected";
                $message .= "<br>";
            }
            
   

            if(isset($_POST["SSC"]) || isset($_POST["HSC"]) || isset($_POST["BSc"])|| isset($_POST["MSc"]))

            {
            
            
                if(isset($_POST["SSC"]) && isset($_POST["HSC"]) && isset($_POST["BSc"]) && isset($_POST["MSc"]))
                {
                    echo "You are selected All degree"."<br>";
                    
                }
            
                elseif(isset($_POST["SSC"]) && isset($_POST["HSC"]) && isset($_POST["BSc"]))
                {
                    echo"you are selected SSC,HSC & BSc"."<br>";
                    
                }
            
                elseif(isset($_POST["SSC"]) && isset($_POST["HSC"]) && isset($_POST["MSc"]))
                {
                    echo "you are selected SSC,HSC & MSc"."<br>";
                }
                
                elseif(isset($_POST["HSC"]) && isset($_POST["BSc"]) && isset($_POST["MSc"]))
                {
                    echo "you are selected HSC,BSc & MSc"."<br>";
                }
            
                elseif(isset($_POST["SSC"]) && isset($_POST["BSc"]) && isset($_POST["MSc"]))
                {
                    echo "you are selected SSC,BSc & MSc"."<br>";
                   
                }
            
                elseif(isset($_POST["SSC"]) && isset($_POST["HSC"]))
                {
                    echo"you are selected SSC & HSC"."<br>";
                    
                }
                elseif(isset($_POST["SSC"]) && isset($_POST["BSc"]))
                {
                    echo "you are selected SSC & BSc "."<br>";
                    
                }
                elseif(isset($_POST["SSC"]) && isset($_POST["MSc"]))
                {
                    echo"you are selected SSC & MSc "."<br>";
                    
                }
                elseif(isset($_POST["HSC"]) && isset($_POST["BSc"]))
                {
                    echo"you are selected HSC & BSc "."<br>";
                   
                }
                elseif(isset($_POST["HSC"]) && isset($_POST["MSc"]))
                {
                    echo"you are selected HSC & MSc"."<br>";
                    
                }
                elseif(isset($_POST["BSc"]) && isset($_POST["MSc"]))
                {
                    echo"you are selected BSc & MSc "."<br>";
                    
                }
              
                
            }
            else{
                echo"you are not selected Any Degree"."<br>";
                
            }
            

            if ($message === "") {
                echo "Registration Successful";
            }
            else {
                echo $message;
            }
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
        <fieldset>
            <legend>NAME</legend>

        
            <input type="text" name="firstname" id="fname" value="<?php echo $firstname; ?>">

            <span><?php echo $firstnameErrMsg; ?></span>
            </fieldset>
            
            

        <fieldset>
            <legend>EMAIL</legend>

        
            <input type="email" name="email" id="email">

        </fieldset>




        <fieldset>
            <legend>DATE OF BIRTH</legend>

    
            <input type="date" value="1953-1998"
       min="1953-01-01" max="1998-12-31">

        </fieldset>


          
        <fieldset>
            <legend>Gender</legend>

            <input type="radio" name="gender" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="Other">
            <label for="Other">Other</label>
            
        </fieldset>
      

        <fieldset>
            <legend>DEGREE</legend>
        
            <input type="checkbox" name="SSC" value="SSC">SSC
            <input type="checkbox" name="HSC" value="HSC">HSC
            <input type="checkbox" name="BSc" value="BSc">BSc
            <input type="checkbox" name="MSc" value="MSc">MSc

        </fieldset>


        <fieldset>
            <legend>BLOOD GROPU</legend>

        <select name="Mem_BloodGr" >
<option value="A+">A+</option><option value="A-">A-</option>
<option value="B+">B+</option><option value="B-">B-</option>
<option value="O+">O+</option><option value="O-">O-</option>
<option value="AB+">AB+</option><option value="AB-">AB-</option>
</select>

</fieldset>


        

        <input type="submit" name="submit" value="submit">
    </form>

</body>
</html>