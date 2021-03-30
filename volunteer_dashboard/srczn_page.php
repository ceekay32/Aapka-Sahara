<?php
//THIS IS FOR SENIOR CITIZEN
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



    .container {
        display: flex;

        text-align: center;
    }



    .card1 {
       align-items: center;
        display: flex;
        width: 30vw;
        height: 30vh;
        color: blue;
        margin-bottom: 20px;
        margin-left: 10px;
        border-radius: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        overflow: hidden;
        font-family: 'Lato', sans-serif;
        color: black;
        background-color: white;
        text-align: center;
    }

    .info {
        text-align: left;
        font-weight: bolder;
        padding-left: 20px;
    }

    .h1 {
        font-family: 'Lato', sans-serif;
        text-align: center;

        padding-top: 50px;
        padding-bottom: 30px;

    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard volunteer_page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
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

                    <a class="nav-link " href="./home_page.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                    <a class="nav-link active" aria-current="page" href=""><i class="fa fa-search" aria-hidden="true"></i>Senior Citizen</a>


                    <a class="nav-link" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <h1 class="h1">
        Senior Citizens
    </h1>
    <table>
        <?php
        require('db.php');

        $sql = "SELECT username , email , mobile FROM snrcitizen
        ORDER BY RAND()
LIMIT 5;";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo
                "<div class='card1 container-sm'>
                 
                  <div class='info '>
                     <h1>Name:  {$row['username']}</h1>
                     <h2 >Email:  {$row['email']}</h2>
                     <h2>MobileNo: {$row['mobile']}</h2>
                  </div>
                  </div>";
            }
            echo "</table>";
        } else {
            echo " No results ";
        }

        $con->close();
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>