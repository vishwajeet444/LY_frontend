<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin1"]) && $_SESSION["loggedin1"] === true){
    header("location: kbp.php");
    exit;
}
 
// Include config file
require_once "config1.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "<br>Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "<br>Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM epiz_30424908_kbp_cred WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin1"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: kbp.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "<br> Invalid username or password.1";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "<br>Invalid username or password.2";
                }
            } else{
                echo "<br>Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
    *{
    padding: 0;
    margin: 0;
    /* font-family: sans-serif; */
    font-size: 23px;
    }
    @media screen 
    and (min-width: 1281px)
    and (max-device-width: 1600px)
    and (-webkit-min-device-pixel-ratio: 1) 
    {
    .backnew{
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        opacity: 0.7;
    }
    .wrapper{
        /* border: 5px solid green; */
        border-radius: 10px;
        position: absolute;
        align-items: center;
        left: 55%;
        top: 15%;
        width: 570px;
        height: 55vh;
        padding: 20px;
        background-color: lightgreen;
    }
    .form-group{
        /* border: 10px solid red; */
        margin: 40px;
        margin-left: 60px;
    }
    .form-top{
        margin-top: 30px;
        margin-left: 60px;
    }
    .form-end{
        margin-left: 110px;
    }
    }
    @media screen and (min-width: 100px) and (max-width: 1024px) 
    and (min-device-height: 500px) and (max-device-height: 1666px)  
    and (orientation: portrait) 
    {
        *{
        padding: 0;
        margin: 0;
        /* font-family: sans-serif; */
        font-size: 45px;
        }
        .backnew{
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        opacity: 0.7;
        }
        .wrapper{
            /* border: 2px solid green; */
            border-radius: 10px;
            position: absolute;
            align-items: center;
            left: 28%;
            top: 10%;
            width: 700px;
            height: 35vh;
            padding: 0px;
            background-color: transparent;
            
            color: black;
            font-weight: bold;

        }
        .form-group{
            /* border: 1px solid red; */
            text-align: center;
            margin: 40px;
            margin-left: 2%;
        }
        .form-top b{
            /* border: 10px solid yellow; */
            margin-left: 10px;
            margin-top: 10px;
            
        }
        .form-top h2{
            /* border: 10px solid yellow; */
            margin-left: 10px;
            margin-top: 10px;
            text-align: center;
            
        }
        .form-top p{
            /* border: 10px solid green; */
            text-align: center;
            margin-left: 0px;
            margin-top: 10px;
            padding: 1% 10%;
            
        }
        .form-end{
            /* border: 10px solid green; */
            text-align: center;
        }
        .form-end p{
            /* border: 10px solid green; */
            /* margin-left: 20%; */
            text-align: center;
        }
        .end{
        position: absolute;
        top: 100.5%;
        width: 100%;
        height: 25vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        }
        @media (min-width: 540px) and (max-width: 1024px) and (min-device-height: 260px) 
        and (max-device-height: 511px)  and (orientation: landscape) 
        {
        *{
        padding: 0;
        margin: 0;
        /* font-family: sans-serif; */
        font-size: 18px;
        }
        .backnew{
            width: 100%;
            height: 150vh;
            background-size: cover;
            background-position: center;
            opacity: 0.7;
        }
        .wrapper{
            border: 1px solid green;
            border-radius: 10px;
            position: absolute;
            align-items: center;
            left: 45%;
            top: 5%;
            width: 330px;
            height: 65vh;
            padding: 2px;
            background-color: lightgreen;
        }
        .form-group{
            /* border: 10px solid red; */
            margin: 10px;
            margin-left: 5%;
        }
        .form-top b{
            /* border: 10px solid green; */
            margin-left: 150px;
            margin-top: 10px;
            
        }
        .form-top p{
            /* border: 10px solid green; */
            margin-left: 6px;
            margin-top: 10px;
            
        }
        .form-end{
            /* border: 10px solid green; */
            text-align: center;
        }
        .form-end p{
            /* border: 10px solid green; */
            /* margin-left: 20%; */
            text-align: center;
        }
        .end{
        position: absolute;
        top: 150%;
        width: 100%;
        height: 45vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        }

    </style>
</head>
<body>
    <img src="img/far11.jpg" class="backnew">
    <div class="wrapper">
        <div class="form-top">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        </div>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <div class="form-end">
            <p>Don't have an account? <br> <a href="form.php">Sign up now</a>.</p>
            </div>
        </form>
    </div>
</body>

<div class="end">
    <br>
    <img style="height:85px;width:100px; border-radius: 10px;" src="img/aws.png" alt="Brillect Tech Solutions Pvt. Ltd.">
    </p>
    <p><a style="color:white; text-decoration: none;" href="https://www.amazon.com/gp/navigation-country/select-country">© 1996-2021, Amazon.com, Inc. or its affiliates </a></p>
    <br>
    <p style="color:rgb(132, 200, 255);font-size:14px; text-decoration:none;">Contact &#8644; <a style="font-size:16px; color:rgb(132, 200, 255);" href="mailto: vishwajeetkadam14@gmail.com">Vishwajeet Kadam</a></p>
</div>

</html>