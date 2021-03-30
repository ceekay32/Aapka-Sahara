<!DOCTYPE html>
<html lang="en">

<head>
   <style>
      .fire,
      .police,
      .hospital {
         text-align: center;
      }
   </style>
   <title>Emergency Services</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link rel="stylesheet" href="../style_dashboard.css">



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
         <a class="navbar-brand " href="#">Aapka Sahara</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">

               <a class="nav-link " href="./home_page.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
               <a class="nav-link" href="./volunteer_page.php"><i class="fa fa-search" aria-hidden="true"></i>Volunteer</a>

               <a class="nav-link active" aria-current="page" href="./emergency_services.php"><i class="fa fa-ambulance" aria-hidden="true"></i>Emergency Services</a>
               <a class="nav-link " href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
            </div>
         </div>
      </div>
   </nav>

   <div class="jumbotron text-center">
      <h1>Emergency Services !!</h1>

   </div>

   <div class="container">
      <div class="row">
         <div class="col-md-4 hospital">
            <h3>Hospital</h3>
            <p>Contact nearest hospital for medical aid.</p>

            <a href="tel:+91102"><img src="../Assets/download.png" alt="no response"></a>


            <p> <br> Call 102 for ambulance services</p>
         </div>
         <div class="col-md-4 police">
            <h3>Police</h3>

            <p>
               Don't hesitate to call the police when needed
            </p>
            <a href="tel:+91100"><img src="../Assets/download1.jfif" alt="no response"></a>
            <p><br> Call 24/7 helpline number --- 100</p>
         </div>
         <div class="col-md-4  fire">
            <h3>
               Fire station
            </h3>
            <p>
               In case of fire hazard
            </p>
            <a href="tel:+91101"><img src="../Assets/down1.jfif" alt="no response"> </a>

            <p><br>Call 101</p>
         </div>
      </div>
   </div>

</body>

</html>