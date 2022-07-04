<?php
session_start();
$error=0;
if(isset($_POST["login"]))
{
    if(empty($_POST["fname"] && $_POST["password"]))
    {
        echo "UserName and Password cannot be empty";
    }
    else
    {
        $mydata=file_get_contents("../data/data.json");
        $phpdata=json_decode($mydata);
        foreach($phpdata as $data)
        {
            if($_POST["fname"]==$data->FirstName && $_POST["password"]==$data->Password)
            {
                $_SESSION["fname"]=$_POST["fname"];
                $_SESSION["password"]=$_POST["password"];
                header("location:../view/profile.php");
            }
            else
            {
                $error=1;
            }
        } 
    }
    if($error=1)
    {
        echo "Invalid";
    }
}
?>
