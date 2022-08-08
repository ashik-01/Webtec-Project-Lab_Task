 <!DOCTYPE html>  
 <html>  
      <head>  
       
  <title>Edit Profile</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          
          <script>
function log() {
  alert("Dont Go :) ....Are You Sure you want to go !");
}

function dlt() {
  alert("Delete Account...");
}
</script> 
     </head>  
      <body class="bg-warning col-lg-11.5 m-4">  
        


 <nav class="navbar navbar-expand-sm bg-success navbar-dark">

<h1>Edit Profile</h1> 
<div  style="text-align:right;">
<ul class="navbar-nav ml-auto ">
      <h3> .... </h3>
    <h3 class="nav-item active"><a class="nav-link"href="homepage.php">Home</a></h3>
     <h3> .... </h3>
  <h3 class="nav-item"><a class="nav-link"  href="UserLogin.php" onclick="log()">Log out</a> </h3>


</ul>
</div>
</nav>


   
           <br />  
           
                <div style="text-align:center;">
                <a href="UpdateData.php" class="btn btn-success ">Update Information</a> 
                <br><br>

                <a href="controller\delete.php"  class="btn btn-danger" onclick="dlt()" >Delete Account</a> 

</div>






      </body>  
 </html>  
