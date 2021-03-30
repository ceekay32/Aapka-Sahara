<?php
//THIS IS FOR Volunteer
//include auth_session.php file on all user panel pages
include("C:/xampp/htdocs/SocialCause_hackathon1/auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<style>
    .body {
        background-color: #184d47;
        color: white;

    }

    .srcz1 {
        font-family: 'Lato', sans-serif;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard_homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style_dashboard.css">
</head>

<body class="body">


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">Aapka Sahara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto">

                    <a class="nav-link active" aria-current="page" href=""><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                    <a class="nav-link" href="./srczn_page.php"><i class="fa fa-search" aria-hidden="true"></i>Senior Citizen</a>


                    <a class="nav-link" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center srcz srcz1">
        <h1>Volunteer Login</h1>
        <p class="p"><?php
                        echo "Welcome " . $_SESSION['username'];
                        ?></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>