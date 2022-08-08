<!DOCTYPE html> 
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


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

    <h3 class="nav-item active"><a class="nav-link"href="showorder.php">Order List</a></h3>
    
   <h3> .... </h3>
    <h3  class="nav-item"><a class="nav-link"  href="UserLogin.php" onclick="log()">Log out</a></h3>



</ul>
</div>
</nav>
<?php
 setcookie("Cname",'Login',time()+100000,"/");
 ?>


<section class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-md-3 ">
            <div class="col-lg-4 mr-1  ">
                <a href="Product101.php">
        <img class="img-fluid w-80"id="101" src="image/car raching.jpg"/> </a>
        <P class="text-center">Car Raching</P>
        <p class="text-muted text-center">৳5000</p>

        </div>
        <div class="col-lg-4 ">
            <a href="Product202.php">
        <img class="img-fluid w-80" id="102" src="image/football.png"/></a>
        <p class="text-center">Football</p>
        <p class="text-muted text-center">৳6000</p>

        </div>
        <div class="col-lg-4 ">
            <a href="Product303.php">
        <img class="img-fluid w-80" id="103" src="image/fighting.jpg"/></a>
        <p class="text-center">Fighting</p>
        <p class="text-muted text-center">৳7000</p>

    </div>
</div> 

</section>

<div class="row row-cols-1 row-cols-md-2 row-cols-md-3 ">
    <br><br>

    <button id="dd" class="btn btn-success">order list</button>

<table class="table table-striped table-bordered text-center">
<thead>
    <th>ID</th>
    <th>NAME</th>
    <th>ADDRESS</th>
    <th>EMAIL</th>
    <th>PHONE NUMBER</th>
    <th>Game NAME</th>
    
</thead>
<tbody id="respons">

</tbody>
</table>    
</div>
<script type="text/javascript">

$(document).ready(function(){

 $('#dd').click(function(){
    $.ajax({
        url: 'showajax.php',
        type:'post',

        success:function(responsedata){

            $('#respons').html(responsedata);
        }
 });
});
});
</script>
</body>
</html>
<?php
include"footer.php";
?>