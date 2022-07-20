<?php
include("../model/mydb.php");
session_start();
$error=0;
if(isset($_POST["login"]))

{
    if(empty($_POST["fname"]) && empty($_POST["password"]))
    {
        echo "UserName and passowrd cannot be empty";
    }
    else
    {
        $mydb= new db();
        $conobj= $mydb->openCon();
        $results = $mydb->checkLogin("employee",$_POST["fname"],$_POST["password"],$conobj);

        if($results->num_rows > 0)
        {
            $_SESSION["fname"]=$_POST["fname"];
            $_SESSION["password"]=$_POST["password"];
            header("location:../view/profile.php");
        }
        else 
        {
            echo "Invalid Email or passowrd";
        }
    } 
}
?>