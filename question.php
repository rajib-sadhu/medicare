<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <link rel="stylesheet" href="style.css">
    <script src="question.js"></script>
</head>
<body>
    <body>
        <h2>Patient</h2> <br>
        <h3>Please check all the statements below that apply to you</h3> <br>
        <h5>Select one answer in each row.</h5><br><br>
        <form action="test.php" onsubmit="questionBox()" id="questionForm">
        <div>
            I smoke cigarettes <br>
            <label><input type="radio" id="q11" name="behaviour" value="yes" required>Yes</label><br>
            <label><input type="radio" id="q12" name="behaviour" value="no">No</label><br>
            <label><input type="radio" id="q13" name="behaviour" value="others">Don't Know</label><br>
        <br><br>
        </div>
        <div>
            Do you recently suffered from Covid-19? <br>
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
            <label><input type="radio" id="q82"name="ow" value="no">No</label><br>
            <label><input type="radio" id="q83"name="ow" value="others">Don't Know</label><br>
        <br><br>
        </div>
    
    
       <!-- <a href="age.html"><button>Back</button></a>
        <a href="regions.html"><button>Next</button></a>
        <input type="submit" id="sub" value="NEXT">
    </form>
    <div class="abc">
        <br>
        
          <input type="submit" value="Next" class="Next">
    </div>
    
  
    </form>
    <button class="Back" onclick="document.location='regions.html'">Back</button>
    
  </div>
-->
<form action="test.html">
    <button class="Next">Submit</button>
</form>

    
</body>
</html>