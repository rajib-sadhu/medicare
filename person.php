<?php
session_start();

function getB()
{
    $str='';
    $btn=array(1=>'Myself',2=>'Someone Else');

    while (list($x,$y)=each($btn)) {
        
        $str.='<input type="submit" value="'.$y.'" class="button" name="person" id="'.$y.'"> <br><br>';

    }

     return $str;
}

?>
<?php
if($_POST)
{
    $_SESSION['user'];
    $_SESSION['email'];
   // echo "OK ALL";
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
    #per_div{
        display:flex;
        flex-direction:column;
    }
    #per_div div{
        margin:10px;
    }
    </style>
    <link rel="stylesheet" href="nav-style.css">
</head>
<body bgcolor="lightblue">
<header>
        <div class="pro">
        <img src="medical-logo-1024x1024.jpg" alt="HTML5" style="width:54px ; height: 54px;">      
            <progress value="44.44" max="100">
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


    <h2>Enter Details</h2>

    
        Who is the checkup for? </br> </br>
        
</br>
   <form action="patient.php" method="POST">
   
   <div id="per_div">
    <div>
    <button name="person" type="submit" value="myself" class="button" >myself</button>
    <button name="person" type="submit" value="someone" class="button" >someone else</button>

    <?php//  echo getB();  ?> 
    
    </div>
    </div>
   
   </form>
   
  

<br><br><br>


<button onclick="document.location='symptome.php'" class="Back">Back</button>


</body>
</html>