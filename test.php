<?php
session_start();
?>
<?php
if($_POST)
{
$_SESSION['user']."<br>";
  $_SESSION['email']."<br>";
  $_SESSION['person']."<br>";
  $_SESSION['gender']."<br>";
  $_SESSION['age']."<br>";

  $_SESSION['behaviour']=$_POST['behaviour'];     
  $_SESSION['exe']=$_POST['exe'];     
  $_SESSION['food']=$_POST['food'];     
  $_SESSION['injury']=$_POST['injury'];     
  $_SESSION['cholesterol']=$_POST['cholesterol'];     
  $_SESSION['hypertension']=$_POST['hypertension'];     
  $_SESSION['diabetes']=$_POST['diabetes'];     
  $_SESSION['ow']=$_POST['ow'];     
   // echo "OK ALL";

     $hs='<script>
     var a=document.getElementById("result").innerHTML=localStorage.getItem("health");
        document.write(a);
</script>';
    $_SESSION['hs']=$hs;

    echo $_SESSION['hs'];
    
  /*  $hs='<script>
     var hs= document.getElementById("result").innerHTML=localStorage.getItem("health");

    document.write(hs);
   
    </script>';*/
   

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav-style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"
  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
  crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;padding: 0;box-sizing: border-box;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        #result-div{
            margin: 0;padding: 0;box-sizing: border-box;
            text-align: center;
            justify-content: center;
            align-items: center;
            background-color: coral;
            display: flex;
            font:50px bold;
            color: darkblue;
        }
        #color-div{
            width: 100px;
            height: 100px;
            background-color: aqua;
            align-items: center;
            justify-content: center;
        }

           img{
            border-radius: 50%;
            margin: 0 auto;
            display: block;
        margin-left: auto;
        margin-right: auto;
        width: 30%; 
           }
           img:hover{
            cursor: pointer;
           }
    </style>
</head>
<body bgcolor="lightblue">

<header>
        <div class="pro">
        <img src="medical-logo-1024x1024.jpg" alt="HTML5" style="width:54px ; height: 54px;">      
            <progress value="99.99" max="100">
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




    <h1><strong>MediCare Report</strong> </h1>
    <br><br>
    <div id="result-div">
        <!--main paragraph-->
    <p id="result"> </p>
    
    </div>
    <hr>
    Download Pdf.
    <br>
    
    
    <br>
    <form action="pdf.php" method="POST">
    
        <button name="submit" type="submit" class="download"> <img src="download.gif" alt=""></button>
   
</form>
<div>
    <img src="takecare.jpg" alt="html image">
</div>

    <script>
        var hs= document.getElementById("result").innerHTML=localStorage.getItem("health");
     

           $.ajax({
               url:"pdf.php",
               method:"POST",
               data: hs,
               /*success:function(res){
                   console.log(res);
               }*/
           })

    </script>
</body>
</html>

<?php
include('connection.php');



if(isset($_POST['submit']))
    {


        $name = $_SESSION['user'];
        $email = $_SESSION['email'];
        $per=$_SESSION['person'];
        $sex = $_SESSION['gender'];
        $age = $_SESSION['age'];
    $beha=$_SESSION['behaviour'];
    $exe=$_SESSION['exe'];
    $food=$_SESSION['food'];
    $inju=$_SESSION['injury'];
    $col=$_SESSION['cholesterol'];
    $hypo=$_SESSION['hypertension'];
    $dia=$_SESSION['diabetes'];
    $ow=$_SESSION['ow'];


        $insertQuery = "INSERT INTO form (`name`, `email`, `patient`, `gender`, `age`, `behaviour`, `exe`, `food`, `injury`, `cholesterol`, `hypertension`, `diabetes`, `ow`) 
        VALUES ('$name','$email','$per','$sex','$age','$beha','$exe','$food','$inju','$col','$hypo','$dia','$ow')";

        $res = mysqli_query($con,$insertQuery);

        if($res)
        {
            ?>
                <script>
                alert("Database Insert Properly");
                </script>
            <?php
        }
        else
        {
            ?>
                <script>
                alert("Data Not Insert");
                </script>
            <?php
        }
    }
    else
        {
            ?>
                <script>
                alert("ERROR 404!");
                </script>
            <?php
        }
    ?>