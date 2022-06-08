<?php

$unameError="";

if(isset($_POST["Submit"]))
{
if(is_numeric($_POST["fname"]))
{
    $unameError = "First name should not contain numerical value<br>";
}
else

$unameError=$_POST["fname"]."<br>";

if(is_numeric($_POST["lname"]))
{
    echo "Last name should not contain numerical value<br>";
}
else
echo "Last Name:".$_POST["lname"]."<br>";

if(empty($_POST["email"]))
{
    echo "Email should not be empty<br>";
}
else
echo "Email : ".$_POST["email"]."<br>";

if($_POST["password"]< 6)
{
    echo "Password should be more than 6 character<br>";
}
else
echo "Password :".$_POST["password"]."<br>";

echo "Age : ".$_POST["age"]."<br>";


if(empty($_POST["degisnation"]))
{
    echo "Desgination must be selected<br>";
}
else
echo "Degisnation : ".$_POST["degisnation"]."<br>";


if(empty($_POST["java"]) && empty($_POST["php"]) && empty($_POST["c++"]))
{
    echo "Prefered language must be selected<br>";
}
else if(isset($_POST["java"]) && isset($_POST["php"]) && isset($_POST["c++"]))
{
   echo $_POST["java"]." and ". $_POST["c++"]." and ".$_POST["php"]." has been selected<br>";
}
else if(isset($_POST["java"]) && isset($_POST["php"]))
{
   echo $_POST["java"]." and ". $_POST["php"]." has been selected<br>";
}
else if(isset($_POST["java"]) && isset($_POST["c++"]))
{
   echo $_POST["java"]." and ". $_POST["c++"]." has been selected<br>";
}
else if(isset($_POST["php"]) && isset($_POST["c++"]))
{
   echo $_POST["php"]." and ". $_POST["c++"]." has been selected<br>";
}
else if(isset($_POST["java"]))
{
    echo $_POST["java"]." has been selected<br>";
}
else if(isset($_POST["php"]))
{
    echo $_POST["php"]." has been selected<br>";
}
else if(isset($_POST["c++"]))
{
    echo $_POST["c++"]." has been selected<br>";
}
echo "File: ".$_POST["file"];

$filecontents=file_get_contents("../data/data.json",true);
$arrphp=json_decode($filecontents);
$myarr=array(
    "FirstName"=>$_POST["fname"],
    "LastName"=>$_POST["lname"],
    "Email"=>$_POST["email"],
    "Password"=>$_POST["password"],
    "Age"=>$_POST["age"],
    "Degisation"=>$_POST["degisnation"],
    "File"=>$_POST["file"],
    "prefered language"=>$_POST["java"]." ". $_POST["c++"]." ".$_POST["php"]
);
$arrphp[]=$myarr;
$jsonarr=json_encode($arrphp,JSON_PRETTY_PRINT);
if(file_put_contents("../data/data.json",$jsonarr))
{
echo "Data stored<br>";
}
else
{
 echo "Data isn't store<br>";
}
//$mycontents=file_get_contents("../data/data.json",true);
//$phpstr=json_decode($mycontents);
//echo "Reading from file".$phpstr(0)->fname;

}


?>

