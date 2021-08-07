<?php
session_start();
?>
<?php

    $_SESSION['user'];
    $_SESSION['email'];
   // echo "OK ALL";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav-style.css">
    <style>
        img
        { 
            border-radius: 50%;
            margin: 0 auto;
            display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
       

    .Next{
        outline: none;
        border: none;
        cursor: pointer;
        width: 50px;
        height: 30px;
        background: rgb(109, 219, 109);
        transition: .3s linear;
        
    }
    .Next:hover{
        background: green;

    }
    .Back{
        outline: none;
        border: none;
        cursor: pointer;
        width: 50px;
        height: 30px;
        background: rgb(241, 69, 69);
        transition: .3s linear;
    }
    .Back:hover{
        background: rgb(204, 34, 34);

    }

    </style>
</head>
<body bgcolor="lightblue">

<header>
        <div class="pro">
        <img src="medical-logo-1024x1024.jpg" alt="HTML5" style="width:54px ; height: 54px;">      
            <progress value="22.22" max="100">
            </progress>       
    </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="terms.php">Services</a></li>          
        </ul>
        </nav>
        <a class="btn" href="#"><button>SignUp</button></a>     
    </header>




    <h2 id="title">Terms of Service</h2>
    <div id="img2-div">
        <img src="tandc.jpg" alt="Html image">
    </div>
    <p>Before using the checkup, please read Terms of Service. Remember that:</p>
    <br>
    <ul>
    
        <li>
            <strong>Checkup is not a diagnosis.</strong>Checkup is for informational purposes and is not a qualified medical opinion. 
        </li>
        <br>
        <li>
            <strong>Do not use in emergencies.</strong>In case of health emergency, call your local emergency number immediately.
        </li>
        <br>
        <li>
            <strong>Your data is safe.</strong>Information that you provide is anonymous and not shared with anyone.
        </li>
    </ul>
    <br>

    <form action="symptome.php">
        <label><input type="checkbox" required> I read and accept <a href="terms.php"> Terms of Service </a> and <a href="terms.php"> Privacy Policy </a>.</label>
     <br> <br>
    
    
    <button class="Next">Next</button>
</form>


<button onclick="document.location='second.php'" class="Back">Back</button>

    
    
    
</body>
</html>