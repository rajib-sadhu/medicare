
<?php
session_start();
?>
<?php
if($_POST)
{
    $_SESSION['user'];
    $_SESSION['email'];
    $_SESSION['person'];
    $_SESSION['gender']=$_POST['gender'];
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
        .range-wrap {
  position: relative;
  margin: 0 auto 3rem;
}
        .range {
  width: 30%;
}
.bubble {
  background: red;
  color: white;
  padding: 4px 12px;
  align-items: none;;
  border-radius: 4px;
  left: 0%;
  /*transform: translateX(-0%);*/
}
.range:hover{
  cursor: pointer;
}

    </style>
     <link rel="stylesheet" href="nav-style.css">
</head>
<body bgcolor="lightblue">
<header>
        <div class="pro">
        <img src="medical-logo-1024x1024.jpg" alt="HTML5" style="width:54px ; height: 54px;">      
            <progress value="66.66" max="100">
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
        How old are you? </br></br>
        <form method="POST" action="regions.php">
        <div class="range-wrap">
          
        <input type="range" class="range" name="age" min="0" max="130">
       <output for="age" class="bubble"> </output>
       </div>
    </div>
    <div>
      
    <div class="abc">
      <br>
      
        <input type="submit" name="submit" value="Next" class="Next">
  </div>
  

  </form>
  <button class="Back" onclick="document.location='patient.php'">Back</button>
  
</div>
  
    
    <script>
        const allRanges = document.querySelectorAll(".range-wrap");
allRanges.forEach(wrap => {
  const range = wrap.querySelector(".range");
  const bubble = wrap.querySelector(".bubble");

  range.addEventListener("input", () => {
    setBubble(range, bubble);
  });
  setBubble(range, bubble);
});

function setBubble(range, bubble) {
  const val = range.value;
  const min = range.min ? range.min : 0;
  const max = range.max ? range.max : 100;
  const newVal = Number(((val - min) * 100) / (max - min));
  bubble.innerHTML = val;

  // Sorta magic numbers based on size of the native UI thumb
  bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
}
    </script>
</body>
</html>