<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            margin: 0;padding: 0;box-sizing: border-box;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        #result-div{
            width: 100vw;
            height: 60px;
            background-color: brown;
            color: aliceblue;
            text-align: center;
            display: flex;
            justify-content:space-around;
            font: 50px bold;
        }
        #color-div{
            width: 100px;
            height: 100px;
            background-color: aqua;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1>TEST PAGE</h1>
    <br><br>
    <div id="result-div">
        <!--main paragraph-->
    <p id="result"> </p>
    <h1 id="result"></h1>
    </div>
    <div id="color-div">

    </div>
  
    


    <script>
        document.getElementById("result").innerHTML=localStorage.getItem("health");

    </script>
</body>
</html>