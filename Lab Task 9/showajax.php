<?php 

 $conn= mysqli_connect('localhost','root');
 mysqli_select_db($conn,'final_project');

$sql = "SELECT * FROM orderlist";

    $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query)>0){
        while($result=mysqli_fetch_array($query)){

?>
<tr>

<td> <?php echo $result['ID']?></td>
<td> <?php echo $result['Name']?></td>
<td> <?php echo $result['Address']?></td>
<td> <?php echo $result['Email']?></td>
<td> <?php echo $result['PN']?></td>
<td> <?php echo $result['ProductName']?></td>



</tr>

<?php

        }


    }

?>

