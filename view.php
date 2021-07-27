<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pakistan textile</title>
    
    <link rel="icon" href="image/icon.png">
</head>
<body style="background-color:gray">
<h1 style="text-align:center; font-size:50px; Color:Orange">8623 Records</h1>
<center><img src="image/icon.png" alt="" style="border-radius:30px; height:200px"></center>
    <table border="3" style="width: 1180px; height: 280px; margin-left:0px; margin-top:0px; color:black; margin-bottom:30px">
   <tr style="font-size:40px; background-color: rgb(28, 58, 97)">
   <td><center>name</center></td>
       <td><center>sapid</center></td>
       <td><center>semester</td>
       <td><center>email</center></td>
       <td><center>fathername</center></td><br>
       <td><center>homeaddress</center></td><br>
       <td><center>mobilenumber</center></td><br>
      
       <td><center>Delete</center></td><br>
       
       
   </tr>
   <?php
    include('connection.php');
    $record="SELECT * FROM mtalhakhan_8623_wp";
    $x=(mysqli_query($conn,$record));
    while($row=mysqli_fetch_array($x)){
        ?>
        
    <tr>
    
    <td> <center><?php echo $row['name']; ?></center></td>
        <td> <center><?php echo $row['sapid']; ?></center></td>
        <td> <center><?php echo $row['semester']; ?></center></td>
        <td> <center><?php echo $row['email']; ?></center></td>
        <td> <center><?php echo $row['fathername']; ?></center></td>
        <td> <center><?php echo $row['homeaddress']; ?></center></td>
        <td> <center><?php echo $row['mobilenumber']; ?></center></td>
        
    
       
        <td><center><a href="delete.php? cnic=<?php echo $row['sapid']; ?>" ><input type="submit" class="btn" name="submit" value="DELETE" style="border-radius:50px; width:110px; height:30px"> <br></a></center></td><br>
        </tr>    
    <?php
    }
   ?>
</table>
<a href="http://localhost/5th%20sem%20project/screen%20divider.php">  <input type="submit" class="btn" name="submit" value="Main" style="border-radius:50px; width:150px; height:50px"> <br></a>

</body>
</html>
