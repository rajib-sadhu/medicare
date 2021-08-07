<?php
session_start();
?>
<?php
if($_POST)
{
    $_SESSION['user'];
    $_SESSION['email'];
    //echo "OK ALL";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .Skip{
            outline: none;
    border: none;
    cursor: pointer;
    width: 80px;
    height: 30px;
    background: rgb(109, 89, 221);
    transition: .3s linear;
        }
    </style>
    <link rel="stylesheet" href="nav-style.css">
</head>
<body  bgcolor="lightblue">

<header>
        <div class="pro">
        <img src="medical-logo-1024x1024.jpg" alt="HTML5" style="width:54px ; height: 54px;">      
            <progress value="33.33" max="100">
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



    <h2>Tell us about yourself</h2>

    <div>
        What do you now plan to da about your symptoms? </br>
        <label><input type="radio" name="symp" value="1">I plan to stay at home and self-care</label><br/>
        <label><input type="radio" name="symp" value="2">I plan to consult a doctor</label><br/>
        <label><input type="radio" name="symp" value="3">I plan to go to a emergency room</label><br/>
        <label><input type="radio" name="symp" value="4">I don't khow</label>
    </div> <br/><br/>


    <button onclick="document.location='person.php'" class="Skip">Skip this question</button>
    <button onclick="document.location='person.php'" class="Next">Next</button>
    <button onclick="document.location='terms.php'" class="Back">Back</button>
</body>
</html>