

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Post Harvest Management</title>

    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300&display=swap" rel="stylesheet">

    <style>
        *{
        padding: 0;
        margin: 0;
        }
        @media screen 
        and (min-width: 1281px)
        and (max-device-width: 1600px)
        and (-webkit-min-device-pixel-ratio: 1) 
        { 
        
        .navbar{
            /* border: 3px solid red; */
            position: absolute;
            width: 99.95%;
            height: 6vh;
            background-color: black;
            align-items: center;
            justify-content: space-between;
            display: flex;
        }
        .logo{
            width: 130px;
            border-radius: 10px;
            position: absolute;
            top: 8%;
            left: 10%;
        }
        .navbar ul{
            /* border: 3px solid gray; */
            margin-left: 70%;
        }
        .navbar ul li{
            /* border: 3px solid darkgreen; */
            border-radius: 10px;
            margin: 2px 2px;
            list-style: none;
            display: inline-block;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 28px;
            text-decoration: none;
        }
        .navbar ul li a{
            text-decoration: none;
            color: white;
            font-size: 23px;
        }
        .navbar ul li:hover{
            background-color: rgba(100, 148, 237, 0.658);
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            transition: 0.5s;
        }
        .midden{
        /* border: 2px solid red; */
        background-color: rgba(0, 0, 0, 0.863);
        position: absolute;
        top:6%;
        display: flex;
        width: 99.94%;
        height: 15vh;
        }
        .vl1 {
            border-left: 2px solid green;
            top: 6%;
            height: 90px;
            position: absolute;
            left: 20%;
        }
        .title{
            position: absolute;
            left: 22%;
            top: 18%;
            font-family: sans-serif;
        }
        .title h1{
            font-size: 43px;
            color: green;
        }
        .title h2{
            color: rgba(255, 255, 255, 0.877);
        }
        .data{
        border: 2px solid black;
        background-color: black;
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 99.75%;
        height: 5vh;
        display: flex;
        top: 100%;
        }
        .data1{
        border: 2px solid black;
        background-color: black;
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 89.70%;
        height: 7vh;
        display: flex;
        top: 145%;
        padding-left: 10%;
        }
        .data2{
        /* border: 2px solid red; */
        background-color: rgba(0, 0, 0, 0.753);
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 80%;
        height: 100vh;
        display: flex;
        top: 204%;
        padding: 3% 10%;
        font-family: 'Mukta', sans-serif;
        font-weight: normal;
        }
        .text{
        /* border: 1px solid red; */
        color: white;
        font-size: 20px;
        font-weight: lighter;
        position: absolute;
        width: 70%;
        height: 84vh;
        display: inline-block;
        background-color: black;
        padding: 2% 5%;
        }
        .end{
        position: absolute;
        top: 900%;
        width: 100%;
        height: 25vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .text b{
            color: rgba(255, 251, 0, 0.918);
            font-size: x-large;
        }
        }
        @media screen and (min-width: 100px) and (max-width: 1024px) 
        and (min-device-height: 500px) and (max-device-height: 1366px)  
        and (orientation: portrait) 
        {
        .navbar{
            /* border: 1px solid red;    */
            position: absolute;
            width: 100%;
            height: 7.9vh;
            background-color: black;
            align-items: center;
            justify-content: space-between;
            display: flex;
        }
        .logo{
            width: 100px;
            border-radius: 10px;
            position: absolute;
            top: 16%;
            left: 5%;
        }
        .navbar ul{
            /* border: 3px solid gray; */
            position: absolute;
            right: 2%;
            margin-left: 10%;
            /* align-items: flex-end; */
        }
        .navbar ul li{
            border: 1px solid white;
            border-radius: 10px;
            margin: 6px 0px;
            list-style: none;
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 10px;
            text-decoration: none;
        }
        .navbar ul li a{
            text-decoration: none;
            color: white;
            font-size: 20px;
            margin: 1px 4px;
        }
        .navbar ul li:hover{
            background-color: rgba(100, 148, 237, 0.658);
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            transition: 0.5s;
        }
        .midden{
        /* border: 1px solid red; */
        background-color: rgba(0, 0, 0, 0.863);
        position: absolute;
        top:8%;
        display: flex;
        width: 100%;
        height: 17vh;
        }
        .vl1 {
            border-left: 2px solid green;
            top: 6%;
            height: 90px;
            position: absolute;
            left: 36%;
            margin-right: 100%;
        }
        .title{
            /* border: 1px solid yellow; */
            position: absolute;
            left: 39%;
            top: 7%;
            font-family: sans-serif;
        }
        .title h1{
            font-size: 30px;
            color: green;
        }
        .title h2{
            font-size: 20px;
            color: rgba(255, 255, 255, 0.877);
        }
        .data{
        /* border: 2px solid white; */
        background-color: black;
        color: white;
        font-size: 20px;
        padding-top: 0.8%;
        position: absolute;
        width: 100%;
        height: 5vh;
        display: flex;
        top: 101.5%;
        }
        .data1{
        /* border: 2px solid red; */
        background-color: black;
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 90%;
        height: 7vh;
        display: flex;
        top: 136%;
        padding-left: 10%;
        }
        .data2{
        /* border: 2px solid red; */
        background-color: rgba(0, 0, 0, 0.753);
        color: white;
        font-size: 18px;
        padding-top: 0.4%;
        position: absolute;
        width: 80%;
        height: 222vh;
        display: flex;
        top: 181%;
        padding: 3% 10%;
        font-family: 'Mukta', sans-serif;
        font-weight: normal;
        }
        .text{
        border: 1px solid white;
        color: white;
        /* font-size: 10px; */
        font-weight: lighter;
        position: absolute;
        width: 85%;
        height: 215vh;
        display: inline-block;
        background-color: black;
        padding: 2% 3%;
        margin-left: -6%;
        }
        .end{
        position: absolute;
        top: 1510%;
        width: 100%;
        height: 35vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .text b{
            color: rgba(255, 251, 0, 0.918);
            font-size: 20px;
        }
        }
        @media (min-width: 540px) and (max-width: 1024px) and (min-device-height: 260px) 
        and (max-device-height: 511px)  and (orientation: landscape) 
        {
  
        .navbar{
        /* border: 1px solid red; */
        position: absolute;
        width: 100%;
        height: 8.9vh;
        background-color: black;
        align-items: center;
        justify-content: space-between;
        display: flex;
        }
        .logo{
            width: 100px;
            border-radius: 10px;
            position: absolute;
            top: 17%;
            left: 5%;
        }
        .navbar ul{
            /* border: 3px solid gray; */
            position: absolute;
            right: 2%;
            margin-left: 10%;
            /* align-items: flex-end; */
        }
        .navbar ul li{
            border: 1px solid white;
            border-radius: 10px;
            margin: 6px 8px;
            list-style: none;
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 10px;
            text-decoration: none;
        }
        .navbar ul li a{
            text-decoration: none;
            color: white;
            font-size: 20px;
            margin: 1px 4px;
        }
        .navbar ul li:hover{
            background-color: rgba(100, 148, 237, 0.658);
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            transition: 0.5s;
        }
        .midden{
        /* border: 1px solid red; */
        background-color: rgba(0, 0, 0, 0.863);
        position: absolute;
        top:9%;
        display: flex;
        width: 100%;
        height: 27vh;
        }
        .vl1 {
            border-left: 2px solid green;
            top: 6%;
            height: 90px;
            position: absolute;
            left: 36%;
            margin-right: 100%;
        }
        .title{
            /* border: 1px solid yellow; */
            position: absolute;
            left: 39%;
            top: 7%;
            font-family: sans-serif;
        }
        .title h1{
            font-size: 30px;
            color: green;
        }
        .title h2{
            font-size: 20px;
            color: rgba(255, 255, 255, 0.877);
        }
        .data{
        /* border: 2px solid white; */
        background-color: black;
        color: white;
        font-size: 20px;
        padding-top: 0.8%;
        position: absolute;
        width: 100%;
        height: 8.5vh;
        display: flex;
        top: 101.5%;
        }
        .data1{
        /* border: 2px solid red; */
        background-color: black;
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 90%;
        height: 12vh;
        display: flex;
        top: 140%;
        padding-left: 10%;
        }
        .data2{
        /* border: 2px solid red; */
        background-color: rgba(0, 0, 0, 0.753);
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 80%;
        height: 425vh;
        display: flex;
        top: 190%;
        padding: 3% 10%;
        font-family: 'Mukta', sans-serif;
        font-weight: normal;
        }
        .text{
        border: 1px solid white;
        color: white;
        /* font-size: 10px; */
        font-weight: lighter;
        position: absolute;
        width: 85%;
        height: 410vh;
        display: inline-block;
        background-color: black;
        padding: 2% 3%;
        margin-left: -6%;
        }
        .end{
        position: absolute;
        top: 1808%;
        width: 100%;
        height: 50vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .text b{
            color: rgba(255, 251, 0, 0.918);
            font-size: 20px;
        }
        }


    </style>

</head>
<body>
    <header class="header1">
            <div class="navbar">
                <ul>
                <li><a href="main.php"><b> 🏠 Home</a></li>
                <li><a href="management.php">🌐 Management </b></a></li>
                </ul>
            </div>
    </header>
    <div class="midden">
    <img src="img/amazon-logo.png" class="logo" usemap="#workmap">
        <map name="workmap">
        <area shape="rect" coords="34,44,270,350" alt="Computer" href="https://www.amazon.in">    </map>
    <div class="vl1"></div>
    <div class="title">
        <h1><b>Post Harvest management</b></h1>
        <h2><i>Powered by Amazon</i></h2>
    </div>
    <div class="data">
        <marquee direction="left"> Note : 1. Please go through each step to get complete information about Post Harvest Management &nbsp; 2. More information will comming soon stay connect with us </marquee>
    </div>
    <div class="data1">
        <h2>About Us</h2>
    </div>
    <div class="data2">
            <div class="text">
                <p>
                    &emsp; &emsp; In our India from farming there are 20% to 25% good crops get devasted due to 
                    insufficient knowledge of proper management of farming and also due to 
                    unavailability of tools during farming. For Stopping it as well as providing 
                    detailed management on improper transportation of products, improper storage, 
                    improper sales, Our trusted platform AMAZON provides in detail informaion about 
                    Post Harvest Management which is helpfull for Farmer. Due to this trusted and secured
                    platform farmers get directly connected to huge market places in world wide area.
                    <br>
                    <br>
                <b>Our Vision</b>
                <br>
                To make available all the information of the latest research about Post Harvest Management 
                in the world, their experiments and improvements' in technology on a single platform.
                <br>
                <br>
                <b>Our Mission</b>
                <br>
                To improve the quality of Post Harvest Management to the farmer and improve the quality of
                of work in farming.
                <br>
                <br>
                <b>Our Objectives</b><br>
                To provide : 
                <!-- <pre class="tab"> -->
                 &emsp; <li>    Ensure that the farmer gets fair value for their produce
                 &emsp; <li>    Reduce the post-harvest losses to raise farmer income and improve food security 
                                and livelihoods for vulnerable people
                 &emsp; <li>    Modernize the agricultural operations for large scale production and 
                                improve the quality of farm produce
                 &emsp; <li>    Enable farmers to make better decisions about crop quality and the appropriate buyer
                <br>
                
                

                </div>
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