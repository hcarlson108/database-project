<?php 

if(isset($_POST["submit"])){

    $fname = $_POST["uid"];
    $ssn = $_POST["pwd"];

    require_once 'dbinfo.inc';

    if(emptyInputLogin($fname, $pwd) !== false){
        header("location: ../home.php");
        exit();
    }

    loginUser($conn, $fname, $pwd);
}
else{
    header("location: ../login.php")
}
