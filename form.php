<?php
// Include config file
require_once "config1.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "<br>Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "<br>Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM epiz_30424908_kbp_cred WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "<br>This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "<br>Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "<br> Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "<br> Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "<br> Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "<br> Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO epiz_30424908_kbp_cred (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: kbp-pass.php");
            } else{
                echo "<br> Oops! Something went wrong. Please try again later.";
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBPCOE Registration Satara  </title>

    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">

<style>
    *{
    padding: 0;
    margin: 0;
    }
    @media screen 
        and (min-width: 1024px)
        and (max-device-width: 3360px)
        /* and (min-device-height: 4000px) */
        and (-webkit-min-device-pixel-ratio: 1) 
        { 
        .main-data{
        /* border:1px solid black; */
        margin-left:0;
        margin-right:0;
        width:100%; 
        }
        .main-data::before{
        content:'';
        display:block;
        height:2.5rem;
        background: rgba(128, 167, 211, 0.801);

        }
        header{
            /* border: 2px solid yellow; */
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:0 1rem;
        }
        .logo{
        width: 100px;
        border-radius: 10px;
        }
        .navbar ul{
            /* border: 2px solid green; */
            margin: 1.5% 0;
            padding-right: 2%;
            right: 0%;
            padding: 1% 1%;
            position: absolute;
            display: inline-flex;
            
        }
        .navbar ul li{
            border: 2px solid black;
            border-radius: 10px;
            margin: 0px 10px;
            list-style: none;
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 28px;
            text-align: center;
            text-decoration: none;
            background-color: lightblue;
            opacity: 0.75;
        }
        .navbar ul li a{
            text-decoration: none;
            color: maroon;
        }
        .navbar ul li:hover{
            opacity: 0.9;
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            color: blue;
            transition: 0.5s;
        }
        .list{
            border: 1.8px solid black;
            background:rgba(128, 167, 211, 0.801);
            height: 3.5rem;
            text-align:center;
            font-size: 42px;
        }
        .icon{
            display: block;
            align-items: center;
            font-size: 25px;  
            grid-template-columns: 1fr 1fr;
            padding: 10px 15rem;
            background:lightgray;
        }
        img{
        width: 100px;
        border-radius: 10px;
        margin: 5px 5px;
        }
        footer{
        width: 100%;
        padding: 1% 0;
        /* bottom: inherit; */
        background-color: black;
        color: skyblue;
        text-align: center;
        text-decoration: none;
        }
        h2{
            color: black;
            text-decoration: none;
            text-align: center;
        }
        .clg-name {
            margin: 5% 0;
            padding: 2% 2%;
            background-color: rgba(128, 167, 211, 0.801);
            border: 2px solid black;
            border-radius: 15px;
            text-decoration: none;
            text-align: center;
        } 
        .form-group{
        /* border: 1px solid red; */
        margin: 10px 10px;
        font-size: 25PX;
        }
        .form-control{
            font-size: large;
        }
        .btn{
            border: 2px solid red;
            padding: 1% 1%;
            border-radius: 6px;
            font-size: 20PX;
        }
        .btn:hover{
            border: 2px solid green;
            padding: 1% 1%;
            border-radius: 6px;
            font-size: 20PX;
            font-weight: bold;
        }
    }
    @media screen and (min-width: 90px) and (max-width: 1024px) 
    and (min-device-height: 405px) and (max-device-height: 1366px)  
    and (orientation: portrait) 
    {
        .main-data{
        /* border:1px solid black; */
        margin-left:0;
        margin-right:0;
        width:100%; 
        }
        .main-data::before{
        content:'';
        display:block;
        height:2.5rem;
        background: rgba(128, 167, 211, 0.801);

        }
        header{
            /* border: 2px solid yellow; */
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:0 1rem;
        }
        .logo{
        width: 80px;
        border-radius: 10px;
        }
        .navbar ul{
            width: 150px;
            text-align: right;
            right: 0%;
            padding: 1.5% 1%;
            position: absolute;
            display: inline-block;    
        }
        .navbar ul li{
            border: 2px solid black;
            border-radius: 10px;
            margin: 3px;
            right: 0%;
            list-style: none;
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            background-color: lightblue;
            opacity: 0.75;
        }
        .navbar ul li a{
            text-decoration: none;
            color: maroon;
        }
        .navbar ul li:hover{
            opacity: 0.9;
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            color: blue;
            transition: 0.5s;
        }
        .list{
            background:rgba(128, 167, 211, 0.801);
            height: 3.7rem;
            text-align:center;
            font-size: 22px;
        }
        .icon{
        display:block;
        align-items: center;
        font-size: 15px;  
        grid-template-columns: 1fr 1fr;
        padding: 10px 1rem;
        background:lightgray;
        margin-bottom:0.3rem;
        }
        img{
        width: 70px;
        border-radius: 10px;
        margin: 5px 5px;
        }
        footer{
        width: 100%;
        padding: 1% 0;
        /* bottom: inherit; */
        background-color: black;
        color: skyblue;
        text-align: center;
        text-decoration: none;
        }
        h2{
            color: black;
            text-decoration: none;
        }
        .clg-name {
            margin: 5% 0;
            padding: 2% 2%;
            background-color: rgba(128, 167, 211, 0.801);
            border: 2px solid black;
            border-radius: 15px;
            text-decoration: none;
            text-align: center;
        } 
        .form-group{
        /* border: 1px solid red; */
        margin: 10px 10px;
        font-size: 20PX;
        }
        .form-control{
            font-size: medium;
        }
        .btn{
            border: 2px solid red;
            padding: 1% 1%;
            border-radius: 6px;
            font-size: 20PX;
        }
        .btn:hover{
            border: 2px solid green;
            padding: 1% 1%;
            border-radius: 6px;
            font-size: 20PX;
            font-weight: bold;
        }
    }
    @media (min-width: 500px) and (max-width: 1024px) and (min-device-height: 200px) 
        and (max-device-height: 811px)  and (orientation: landscape) 
        {
            .main-data{
        /* border:1px solid black; */
        margin-left:0;
        margin-right:0;
        width:100%; 
        }
        .main-data::before{
        content:'';
        display:block;
        height:2.5rem;
        background: rgba(128, 167, 211, 0.801);

        }
        header{
            /* border: 2px solid yellow; */
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:0 1rem;
        }
        .logo{
        width: 80px;
        border-radius: 10px;
        }
        .navbar ul{
            width: 150px;
            text-align: right;
            right: 0%;
            padding: 1.5% 1%;
            position: absolute;
            display: inline-block;
        }
        .navbar ul li{
            border: 2px solid black;
            border-radius: 10px;
            margin: 3px;
            /* margin-left: 20%; */
            right: 0%;
            list-style: none;
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            background-color: lightblue;
            opacity: 0.75;
        }
        .navbar ul li a{
            text-decoration: none;
            color: maroon;
        }
        .navbar ul li:hover{
            opacity: 0.9;
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            color: blue;
            transition: 0.5s;
        }
        .list{
            background:rgba(128, 167, 211, 0.801);
            height: 2.5rem;
            text-align:center;
            font-size: 25px;
        }
        .icon{
        display:block;
        align-items: center;
        font-size: 15px;  
        grid-template-columns: 1fr 1fr;
        padding: 10px 1rem;
        background:lightgray;
        margin-bottom:0.3rem;
        }
        img{
        width: 70px;
        border-radius: 10px;
        margin: 5px 5px;
        }
        footer{
        width: 100%;
        padding: 1% 0;
        /* bottom: inherit; */
        background-color: black;
        color: skyblue;
        text-align: center;
        text-decoration: none;
        }
        h2{
            color: black;
            text-decoration: none;
        }
        .clg-name {
            margin: 5% 0;
            padding: 2% 2%;
            background-color: rgba(128, 167, 211, 0.801);
            border: 2px solid black;
            border-radius: 15px;
            text-decoration: none;
            text-align: center;
        } 
        .form-group{
        /* border: 1px solid red; */
        margin: 10px 10px;
        font-size: 20PX;
        }
        .form-control{
            font-size: medium;
        }
        .btn{
            border: 2px solid red;
            padding: 1% 1%;
            border-radius: 6px;
            font-size: 20PX;
        }
        .btn:hover{
            border: 2px solid green;
            padding: 1% 1%;
            border-radius: 6px;
            font-size: 20PX;
            font-weight: bold;
        }
    }


</style>
    
</head>
<body>
    <div class="main-data">
        <header>
            <div class="navbar">
                <img src="kbp.png" class="logo" usemap="#workmap">
                <map name="workmap">
                <area shape="rect" coords="34,44,270,350" alt="Computer" href="https://www.kbpcoes.edu.in/"></map>
                <ul>
                <li><a href="index2.html"><b> Home </a></li>
                <li><a href="reg1.html">Dashboard </a></li>
                </ul>
            </div>
        </div>	
        </header>
        <h3 class="list">Karmveer Bhaurao Patil College of Engineering Satara</h3><br>
        <br>
        <div class="row">
            <div class="icon">
            
            <div class="clg-name">
                <h2>Registration</h2><br>
                <h3>Please fill in your credentials to secure access.</h3><br>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    </div>    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" class="btn btn-primary" value="Submit">
                        
                    </div>
                    <br>
                </form>
            </div>
            <br>
            </div>
        <footer> <img src="logo.jpg"><br>
            <p style="color: rgba(255, 255, 255, 0.822);">Last Update  9-Dec-21</p>
            <br>
            <p>Contact &#8644; <a style="color: rgba(255, 255, 255, 0.822)" href="mailto: vishwajeetkadam14@gmail.com">Vishwajeet Kadam</a></p>
        </footer>    
        
    </div>

</body>
</html>