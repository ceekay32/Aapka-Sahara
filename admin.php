<?php
//THIS IS FOR SENIOR CITIZEN
//include auth_session.php file on all user panel pages
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<style>
bgcolor="#def28d"
   .srcz1 {
      font-family: 'Lato', sans-serif;
   }
</style>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Panel</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../style_dashboard.css">
   <style>body {background-color: white;}</style>

</head>

<body class="body">


   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
         <a class="navbar-brand " href="#">Aapka Sahara</a>

      </div>
   </nav>
   <section>
          <section class="wrapper">
  
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All User Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th>username</th>
                                  <th>email</th>
                                  <th>mobile</th>
                                  <th>address</th>
                                  <th>aadhar</th>
                                  <th>dob</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from snrcitizen");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                            <tr>
                            <td><?php echo $cnt;?></td>
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['mobile'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['aadhar'];?></td>
                            <td><?php echo $row['dob'];?></td>  
                        
                            </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>