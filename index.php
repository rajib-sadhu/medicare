<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            margin: 0;
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
            background: #ecf0f3;
        }

        .login-form{
            width: 300px;
            height: 500px;
            align-items: center;
            justify-content: center;
            background: #ecf0f3;
            border-radius: 30px;
            box-shadow: 10px 10px 15px #cbced1,
                        -10px -10px 15px white;
        }
        .logo{
            background: url("logo 2.png");
            height: 80px;
            width: 80px;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto;

        }
        .title{
            text-align: center;
            text-transform: uppercase;
            font-family: sans-serif;
            font-size: 15px;
            padding-top: 15px;
            letter-spacing: .3px;
        }

        
        .fields{
            width: 100%;
            height: 50px;
            outline: none;
            border:none;
            cursor: pointer;
            padding: 45px 5px 5px 5px;
            align-items: center;
            justify-content: center;
            
            
            
        }
        .fields input{
            border: none;
            outline: none;
            background: none;
            color: #555;
            padding: 20px 10px 20px 5px;
            align-items: center;
            justify-content: center;
            
            
        }
        .username, .email{
            width: 100%;
            border-radius: 10px;
            box-shadow:inset 10px 10px 15px #cbced1,inset -8px -8px 15px white;
            align-items: center;
            justify-content: center;
        }
        .signin-button{
            outline: none;
            border: none;
            cursor: pointer;
            width: 100%;
            height: 50px;
            border-radius: 20px;
            background: rgb(233, 51, 60);
            box-shadow: 3px 3px 8px #cbced1,
            -3px -3px 3px white;
            color: white;
            transition: .3s linear;

        }
        .signin-button:hover{
            background: rgb(218, 13, 13);
        }
        .signin-button:active{
            background: rgb(45, 45, 212);
        }
    </style>
</head>
<body>
    <div class="login-form">
        <div class="logo"></div>
            <br> <br>
            <div class="title">MediCare</div>
            
        <form action="second.php" method="POST">
            <div class="fields">
                <div class="username"><input type="name" name="user" class="user-name" placeholder="Full Name" required></div> <br>
                <div class="email"><input type="email" name="email" class="email" placeholder="Email ID" required></div>
            </div>
            <br><br><br><br><br><br><br><br><br>
           
        <!--<button type="submit" class="signin-button"> Next </button>-->
        <input type="submit" name="submit" class="signin-button" value="Next">

        </div>
    </form>
    </div>
    

    
</body>
</html>
<?php //include 'connection.php' ?>