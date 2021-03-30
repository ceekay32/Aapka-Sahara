<!DOCTYPE html>

<html>

<head>
    <!-- THIS IS FOR SENIOR CITIZEN -->
    <meta charset="utf-8" />
    <title>Registration</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css" />
</head>

<body>
    <div class="bg-image bg-reg"></div>
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
            $query    = "INSERT INTO `snrcitizen` (`username`, `email`, `password`, `mobile`, `address`, `aadhar`, `dob`) VALUES ('$username', '$email', '$password', '$mobile', '$address', '$aadhar', '$dob')";
            $result   = mysqli_query($con, $query);
            $query2 = "SELECT * FROM 'snrcitizen' where 'aadhar' as '$aadhar' ";
            $result2 = mysqli_query($con, $query2);

            if ($result) {
                $ToEmail = $email;
                $EmailSubject = 'Sucessfully Register';
                $mailheader = 'From: Aapka Sahara<noreply@raolpatel.in>';
                $MESSAGE_BODY = "Thank You for Registering at aapka sahara as senior citizen";
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
                  <p class='link'>Required fields are missing.Click here to <a href='registration.php'>register</a> again.</p>
                  </div>";
            }
        } else {
        ?>
            <form class="form2" action="" method="post">
                <h1 class="login-title">Register as Senior Citizen</h1>
                <input type="text" class="login-input" name="username" placeholder="Username" required />
                <input type="text" class="login-input" name="email" placeholder="Email Adress" required />
                <input type="password" class="login-input" name="password" placeholder="Password" required />
                <input type="text" class="login-input" name="mobile" placeholder="Mobile" required />
                <input type="text" class="login-input" name="address" placeholder="Address" required />
                <input type="text" class="login-input" name="aadhar" placeholder="Aadhar" required />
                <input type="date" class="login-input" name="dob" placeholder="DOB" required />
                <input type="submit" name="submit" value="Register" class="login-button" required />
                <p class="link"><a href="../login.php">Click to Login</a></p>
                <p class="link"><a href="../volunteer_dashboard/registration2.php">OR register as volunteer</a></p>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>