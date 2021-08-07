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
    $_SESSION['age'];
   // echo "OK ALL";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PA Statement</title>
    
   <!-- <script src="question.js"></script>-->
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav-style.css">
</head>
<
    <body bgcolor="lightblue">

    <header>
        <div class="pro">
        <img src="medical-logo-1024x1024.jpg" alt="HTML5" style="width:54px ; height: 54px;">      
            <progress value="88.88" max="100">
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




        <h2>Patient</h2> <br>
        <h3>Please check all the statements below that apply to you</h3> <br>
        <h5>Select one answer in each row.</h5><br><br>

        <form action="test.php" onsubmit="questionBox()" method="POST" id="questionForm">

        <div>
            I smoke cigarettes <br>
            <label><input type="radio" id="q11" name="behaviour" value="yes" required>Yes</label><br>
            <label><input type="radio" id="q12" name="behaviour" value="no">No</label><br>
            <label><input type="radio" id="q13" name="behaviour" value="others">Don't Know</label><br>
        <br><br>
        </div>
        <div>
            Do you do any exercise? <br>
            <label><input type="radio" id="q21"  name="exe" value="yes" required>Yes</label><br>
            <label><input type="radio" id="q22"  name="exe" value="no">No</label><br>
            <label><input type="radio" id="q23"  name="exe" value="others">Don't Know</label><br>
        <br><br>
        </div>
        <div>
            What kind of food do you eat? <br>
            <label><input type="radio" id="q31"  name="food" value="yes" required>Junk food</label><br>
            <label><input type="radio" id="q32"  name="food" value="no">Healthy food</label><br>
            <label><input type="radio" id="q33" name="food" value="others">Both</label><br>
        <br><br>
        </div>
        <div>
           I've recently suffered an injury <br>
            <label><input type="radio" id="q41"  name="injury" value="yes" required>Yes</label><br>
            <label><input type="radio" id="q42"  name="injury" value="no">No</label><br>
            <label><input type="radio" id="q43"  name="injury" value="others">Don't Know</label><br>
        <br><br>
        </div>
        <div>
            I have high cholesterol <br>
            <label><input type="radio" id="q51"  name="cholesterol" value="yes" required>Yes</label><br>
            <label><input type="radio" id="q52"  name="cholesterol" value="no">No</label><br>
            <label><input type="radio" id="q53"  name="cholesterol" value="others">Don't Know</label><br>
        <br><br>
        </div>
        <div>
            I have high hypertension <br>
            <label><input type="radio" id="q61"  name="hypertension" value="yes" required>Yes</label><br>
            <label><input type="radio" id="q62"  name="hypertension" value="no">No</label><br>
            <label><input type="radio" id="q63"  name="hypertension" value="others">Don't Know</label><br>
        <br><br>
        </div>
        <div>
            I have diabetes <br>
            <label><input type="radio" id="q71"  name="diabetes" value="yes" required>Yes</label><br>
            <label><input type="radio" id="q72"  name="diabetes" value="no">No</label><br>
            <label><input type="radio" id="q73"  name="diabetes" value="others">Don't Know</label><br>
        <br><br>
        </div>
        <div>
            Are you overweight or obese? <br>
            <label><input type="radio" id="q81"  name="ow" value="yes" required>Yes</label><br>
            <label><input type="radio" id="q82" name="ow" value="no">No</label><br>
            <label><input type="radio" id="q83" name="ow" value="others">Don't Know</label><br>
        <br><br>
        </div>
    
    
        <button onclick="document.location='patient.html'" class="Back">Back</button>
       <!-- <button type="submit" class="Next">Next</button>-->
        <input type="submit" class="Next" name="submit" value="submit">
        
    </form>

<!--   <input type="submit" id="sub" value="NEXT">
<form action="regions.php">
   
</form>
<form action="test.php">
    <button class="Next">Submit</button>
</form>
-->


<script>

function questionBox(){

    
    var q1=document.getElementsByName('behaviour');
    var q2=document.getElementsByName('exe');
    var q3=document.getElementsByName('food');
    var q4=document.getElementsByName('injury');
    var q5=document.getElementsByName('cholesterol');
    var q6=document.getElementsByName('hypertension');
    var q7=document.getElementsByName('diabetes');
    var q8=document.getElementsByName('ow');

    //7tar besi hole
    if(q1[0].checked && q2[0].checked && q3[0].checked && q4[0].checked && q5[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
        || q1[0].checked && q2[0].checked && q3[0].checked && q4[0].checked && q5[0].checked && q6[0].checked && q7[0].checked
        || q1[0].checked && q2[0].checked && q3[0].checked && q4[0].checked && q5[0].checked && q6[0].checked && q8[0].checked
        || q1[0].checked && q2[0].checked && q3[0].checked && q4[0].checked && q5[0].checked && q7[0].checked && q8[0].checked
        || q1[0].checked && q2[0].checked && q3[0].checked && q4[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
        || q1[0].checked && q2[0].checked && q3[0].checked && q5[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
        || q1[0].checked && q2[0].checked && q4[0].checked && q5[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
        || q1[0].checked && q3[0].checked && q4[0].checked && q5[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
        || q2[0].checked && q3[0].checked && q4[0].checked && q5[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
        )
        {
            //alert("Check by Doctor Immidietly");
            const con="Visit Hospital Immidietly";
            localStorage.setItem("health",con);
            

    return false;
        }
     //4 ter besi hole
    else if(q1[0].checked && q2[0].checked && q3[0].checked && q4[0].checked
         || q5[0].checked && q6[0].checked && q7[0].checked && q8[0].checked
         || q1[0].checked && q2[0].checked && q3[0].checked && q5[0].checked
         || q1[0].checked && q2[0].checked && q3[0].checked && q6[0].checked
         || q1[0].checked && q2[0].checked && q3[0].checked && q7[0].checked
         || q1[0].checked && q2[0].checked && q3[0].checked && q8[0].checked
         || q2[0].checked && q3[0].checked && q4[0].checked && q5[0].checked
         || q2[0].checked && q3[0].checked && q4[0].checked && q6[0].checked
         || q2[0].checked && q3[0].checked && q4[0].checked && q7[0].checked
         || q2[0].checked && q3[0].checked && q4[0].checked && q8[0].checked
         || q3[0].checked && q4[0].checked && q5[0].checked && q6[0].checked
         || q3[0].checked && q4[0].checked && q5[0].checked && q7[0].checked
         || q3[0].checked && q4[0].checked && q5[0].checked && q8[0].checked
         || q4[0].checked && q5[0].checked && q6[0].checked && q7[0].checked
         || q4[0].checked && q5[0].checked && q6[0].checked && q8[0].checked
        )
        {
            //alert("Check by Doctor");
            const con="Consult with Doctor";
            localStorage.setItem("health",con);
    return false;
        }
    //2tor besi hole
    else if (q1[0].checked && q2[0].checked || q1[0].checked && q3[0].checked 
        || q1[0].checked && q4[0].checked || q1[0].checked && q5[0].checked 
        || q1[0].checked && q6[0].checked || q1[0].checked && q7[0].checked 
        || q1[0].checked && q8[0].checked ||
        q2[0].checked && q3[0].checked || q2[0].checked && q4[0].checked 
        || q2[0].checked && q5[0].checked || q2[0].checked && q6[0].checked 
        || q2[0].checked && q7[0].checked || q2[0].checked && q8[0].checked ||
        q3[0].checked && q4[0].checked 
        || q3[0].checked && q5[0].checked || q3[0].checked && q6[0].checked 
        || q3[0].checked && q7[0].checked || q3[0].checked && q8[0].checked ||
        q4[0].checked && q5[0].checked || q4[0].checked && q6[0].checked 
        || q4[0].checked && q7[0].checked || q4[0].checked && q8[0].checked ||
        q5[0].checked && q6[0].checked 
        || q5[0].checked && q7[0].checked || q5[0].checked && q8[0].checked ||
        q6[0].checked && q7[0].checked || q6[0].checked && q8[0].checked ||
        q7[0].checked && q8[0].checked
    ) 
    {
        //alert("Rest in home");
        const con="Rest in home";
        localStorage.setItem("health",con);
    return false;
    }
    //sob thik thakle
    else
    {
        //alert("You are fine");
        const con="You are fine";
        localStorage.setItem("health",con);
    return false;
    }
    
    }
    
 
</script>

</body>
</html>