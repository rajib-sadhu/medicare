<?php

    $username = "root";
    $password = "";
    $server = "localhost";
    $database = 'medicare';


    $con = mysqli_connect($server,$username,$password,$database);

    //mysqli_connect("localhost","root","","medicare")

    if($con)
    {
?>
    <script>
        alert("Connection Successfull");
    </script>
    
<?php
    }
    else
    {
        echo "No Connection";
        die("connection not sucessfull". mysqli_connect_error()); //for dont show error automaticly
    }

?>
