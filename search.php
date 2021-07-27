<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pakistan textile</title>
    
    <link rel="icon" href="image/icon.png">
  </head>
  <body>
  

   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header mt-4">
                       <h4 class="cardtitle">Fetch or Search data by SAPID</h4>
                   </div>
                   <div class="card-body">
                       <div class="row">
                           <div class="col-md-6">
                               <form action="" method="post">
                               <div class="form-group">
                                   <input type="text" name="sapid" placeholder="Enter SAP_ID" class="from-control" required>
                               </div>
                               <button type="search" name="search_by_id" class="btn btn-primary">Search</button>
                               </form>
                           </div>
                       </div>
                       <?php
                           include('connection.php');

if(isset($_POST['search_by_id']))
{
    $sapid = $_POST['sapid'];
    $query = "SELECT * from mtalhakhan_8623_wp where sapid = '$sapid'";
    $query_run =(mysqli_query($conn,$query));
   
?>

                       <div class="table_responsive">
                       <table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">name</th>
      <th scope="col">Sap_Id</th>
      <th scope="col">Semester</th>
      <th scope="col">email</th>
      <th scope="col">fathername</th>
      <th scope="col">Address</th>
      <th scope="col">mobilenumber</th>
    </tr>
  </thead>
  <tbody>
      <?php
           if(mysqli_num_rows($query_run)>0){
            while( $row = mysqli_fetch_array($query_run))
            {

?>
    <tr>
    <td><?php echo $row['name'];?></td>
      <td> <?php echo $row['sapid'];?></td>
     
      <td><?php echo $row['semester'];?></td>
     
      <td><?php echo $row['email'];?></td>

      <td><?php echo $row['fathername'];?></td>

      <td><?php echo $row['homeaddress'];?></td>

      <td><?php echo $row['mobilenumber'];?></td>
    </tr>
    <?php
          }
        
        }
        else
        {
            ?>
            <tr><td colspan="6">No record found</td></tr>
            <?php
        }
    ?>
  </tbody>
</table>
                       </div>
                       <?php

    }
                       ?>
                   </div>
               </div>
           </div>
       </div>
   </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>