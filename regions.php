<?php
session_start();
?>
<?php
if($_POST)
{
    $_SESSION['user'];
    $_SESSION['email'];
    $_SESSION['person'];
    $_SESSION['gender'];
    $_SESSION['age']=$_POST['age'];
    //echo "OK ALL";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regions</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav-style.css">
    <style>
        .grid{
            display: grid;
            grid-template-columns: 50% 50%;
            width: 100%;
            height: 100vh;   
        }
        
        
    </style>
</head>
<body>
<header>
        <div class="pro">
        <img src="medical-logo-1024x1024.jpg" alt="HTML5" style="width:54px ; height: 54px;">      
            <progress value="77.77" max="100">
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



    <h2>Please select the region you live in and places you've traveled to in the last 12 months.</h2>

    <div class="grid">
        <div>
            <h4>Asia</h4>
           <a href="pastatement.php"> <img width="442" height="356" src="asia-3.jpg" alt="html image"> </a>
        </div>
        <div>
            <h4>South America</h4>
            <a href="pastatement.php"><img width="442" height="356" src="1fff51d33bd25d90ce67cb6365975503.jpg" alt="html image"></a>
        </div>
        <div>
            <h4>Africa</h4>
            <a href="pastatement.php"><img width="442" height="356" src="414ocpMKxnL.png" alt="html image"></a>
        </div>
        <div>
            <h4>Australia</h4>
            <a href="pastatement.php"><img width="442" height="356" src="australia-map-provinces-0.jpg" alt="html image"></a>
        </div>
        <div>
            <h4>Europe</h4>
            <a href="pastatement.php"><img width="442" height="356" src="FreeVector-Map-Of-Europe.jpg" alt="html image"></a>
        </div>
        <div>
            <h4>Antarctica</h4>
            <a href="pastatement.php"><img width="442" height="356" src="Map-Antarctica-regions-ice-sheets-research-stations.jpg" alt="html image"></a>
        </div>
        <div>
            <h4>North America</h4>
            <a href="pastatement.php"><img width="442" height="356" src="north-america-map.gif" alt="html image"></a>
        </div>

    </div>
   <!-- <div>
        <p>MAP</p>
        <img src="https://geology.com/world/world-map-360.gif" alt="">
    <map id="nw-map" name="nw-map">
    <area shape="poly" coords="276,9,264,99,85,99,50,82,55,9" href="1fff51d33bd25d90ce67cb6365975503.jpg" alt=""/>
    <area shape="rect" coords="9,90,155,180" href="414ocpMKxnL.png" alt=""/>
    <area shape="circle" coords="312,234,65" href="asia-3.jpg" alt=""/>
    <area shape="poly" coords="176,8,164,89,75,89,40,72,45,8" href="australia-map-provinces-0.jpg" alt=""/>
    <area shape="rect" coords="10,100,255,280" href="Map-Antarctica-regions-ice-sheets-research-stations.jpg" alt=""/>
    <area shape="circle" coords="212,134,55" href="FreeVector-Map-Of-Europe.jpg" alt=""/>
    <area shape="poly" coords="376,11,364,109,95,109,60,92,75,11" href="north-america-map.gif" alt=""/>
    </map>
    </div>-->
</body>
</html>