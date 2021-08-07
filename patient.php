<?php
session_start();
?>
<?php
if($_POST)
{
    $_SESSION['user'];
    $_SESSION['email'];
    $_SESSION['person']=$_POST['person'];
   // echo "OK ALL";
}


function getB()
{
     $str='';
    $btn=array(

        1=>'Male',
        2=>'Female',
        3=>'Other'
        );

    while (list($x,$y)=each($btn)) {
        
        $str.='<input type="submit" value="'.$y.'" class="button" name="gender"> <br><br>';
    }

     return $str;
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
    <link rel="stylesheet" href="nav-style.css">
</head>
<body bgcolor="lightblue">
<header>
        <div class="pro">
        <img src="medical-logo-1024x1024.jpg" alt="HTML5" style="width:54px ; height: 54px;">      
            <progress value="55.55" max="100">
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

    <h2>Patient</h2>
    <div>
        What is your sex? </br></br>
        <br>

        <form action="age.php" method="POST">
   
   <div id="per_div">
    <div>
    
    <?php  echo getB();  ?> 
    
    </div>
    </div>
   
   </form>

           <button  onclick="document.location='person.php'" class="Back">Back</button>
       
    </div>
    
    
</body>
</html>