<?php
session_start();

if($_POST)
{
    $_SESSION['user']=$_POST['user'];
    $_SESSION['email']=$_POST['email'];
}

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
        width: 30%;
    }
    p{
        font-size: 20px;
    }
    .Next{
        outline: none;
        border: none;
        cursor: pointer;
        width: 50px;
        height: 30px;
        background: forestgreen;
        transition: .3s linear;
    }
    .Next:hover{
        background: green;

    }
   
    </style>
</head>
<body bgcolor="lightblue">
<header>
        <div class="pro">
        <img src="medical-logo-1024x1024.jpg" alt="HTML5" style="width:54px ; height: 54px;">      
            <progress value="11.11" max="100">
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

    <main class="form">
        <h2 id="title">Introduction</h2> <br>
        <h4>Hello!</h4><br> <br>
        <div id="img-div">
            <img src="background.jpg">
        </div>
        
        <p id="description">You're about to use a short (3 min), safe and anonymous health checkup. Your answers will be carefully analyzed and you'll learn about possible causes of your symptoms</p>
       

        <button onclick="document.location='terms.php'" class="Next">Next</button>
  


    </main>
    
    
</body>
</html>
