<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="bg-image bg-login"></div>
    <div class="bg-text">
        <?php
        require('db.php');
        session_start();
        $rows1 = '';
        $rows2 = '';
        // When form submitted, check and create user session.
        if (isset($_POST['username'])) {
            $username = stripslashes($_REQUEST['username']);    // removes backslashes
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);

            // Check user is exist in the database

            $query1    = "SELECT * FROM `snrcitizen` WHERE username='$username'
                     AND password='$password'";
            $result1 = mysqli_query($con, $query1) or die(mysqli_error());
            $rows1 = mysqli_num_rows($result1);

            $query2 = "SELECT * FROM `volunteer` WHERE username='$username'
        AND password='$password'";
            $result2 = mysqli_query($con, $query2) or die(mysqli_error());
            $rows2 = mysqli_num_rows($result2);

            if ($rows1 == true) {
                $_SESSION['username'] = $username;
                // Redirect to user dashboard page
                header("Location: ./seniorcitizen_dashboard/home_page.php");
            } else if ($rows2 == true) {
                $_SESSION['username'] = $username;
                // Redirect to user dashboard page
                header("Location: ./volunteer_dashboard/home_page.php");
            }
        } else if ($rows1 && $rows2) {

            echo "<div class='form'>
                      <h3>Incorrect Username/password.</h3><br/>
                      <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                      </div>";
        } else {
        ?>
            <form class="form" method="post" name="login">
                <h1 class="login-title">Login</h1>
                <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" />
                <input type="password" class="login-input" name="password" placeholder="Password" />
                <input type="submit" value="Login" name="submit" class="login-button" />
                <p class="link">Don't have an account? <a href="seniorcitizen_dashboard/registration.php">Register as Senior Citizen</a></p>
                <p class="link">Don't have an account? <a href="volunteer_dashboard/registration2.php">Register as Volunteer</a></p>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>