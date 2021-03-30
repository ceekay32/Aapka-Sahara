<!DOCTYPE html>
<html>
<!-- THIS IS FOR VOLUNTEER  -->

<head>
    <style>
        .bg-login {
            background-image: url("assets/istockphoto-1049817796-612x612.jpg");
        }

        .bg-reg {
            background-image: url("assets/outdoors-3340443__340.jpg");
        }

        .bg-reg-2 {
            background-image: url("./assets/outdoors-3340443__340.jpg");
        }

        .bg-image {
            /* The image used */

            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(8px);

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bg-text {
            /* Fallback color */
            /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            font-family: "Lato", sans-serif;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
        }
    </style>
    <meta charset="utf-8" />
    <title>Register as Volunteer</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css" />
</head>

<body>
    <div class="bg-image bg-reg-2"></div>
    <div class="bg-text">
        <?php
        require('db.php');
        // When form submitted, insert values into the database.
        if (isset($_REQUEST['username'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $mobile = $_POST['mobile'];
            $address = $_POST['address'];
            $aadhar = $_POST['aadhar'];
            $dob = $_POST['dob'];
            $query    = "INSERT INTO `volunteer` (`username`, `email`, `password`, `mobile`, `address`, `aadhar`, `dob`) VALUES ('$username', '$email', '$password', '$mobile', '$address', '$aadhar', '$dob')";
            $result   = mysqli_query($con, $query);
            $query2 = "SELECT * FROM 'volunteer' where 'aadhar' as '$aadhar' ";
            $result2 = mysqli_query($con, $query2);
            if ($result) {
                $ToEmail = $email;
                $EmailSubject = 'Sucessfully Register';
                $mailheader = 'From: Aapka Sahara<noreply@raolpatel.in>';
                $MESSAGE_BODY = "Thank You for Registering at aapka sahara as Volunteer";
                @mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader);
                echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
            } else if ($result2 != 1) {
                echo "<div class='form'>
                    <h3>This aadhar is already linked with an account</h3><br/>
                    <p class='link'>This aadhar is already linked with an account.Click here to <a href='registration.php'>register</a> again.</p>
                    </div>";
            } else {
                echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Required fields are missing.Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
            }
        } else {
        ?>
            <form class="form2" action="" method="post">
                <h1 class="login-title">Register as Volunteer</h1>
                <input type="text" class="login-input" name="username" placeholder="Username" required />
                <input type="text" class="login-input" name="email" placeholder="Email Adress" required />
                <input type="password" class="login-input" name="password" placeholder="Password" required />
                <input type="text" class="login-input" name="mobile" placeholder="Mobile" required />
                <input type="text" class="login-input" name="address" placeholder="Address" required />
                <input type="text" class="login-input" name="aadhar" placeholder="Aadhar" required />

                <input type="date" class="login-input" name="dob" placeholder="DOB">
                <input type="submit" name="submit" value="Register" class="login-button">
                <p class="link"><a href="../login.php">Click to Login</a></p>
                <p class="link"><a href="../seniorcitizen_dashboard/registration.php">OR register as senior citizen</a></p>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>