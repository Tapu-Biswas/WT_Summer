<?php
$first=$_POST["fname"];
$last=$_POST["lname"];
$em=$_POST["email"];
$age=$_POST["age"];
$pass=$_POST["password"];


if(is_numeric($first))
{
    echo "First name should not contain numerical value<br>";
}
else
echo "First Name:".$first."<br>";


if(is_numeric($last))
{
    echo "Last name should not contain numerical value<br>";
}
else
echo "Last Name:".$last."<br>";

if(empty($em))
{
    echo "Email should not be empty<br>";
}
else
echo "Email : ".$em."<br>";

if($pass < 6)
{
    echo "Password should be more than 6 character<br>";
}
else
echo "Password :".$pass."<br>";

echo "Age : ".$age."<br>";


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

?>

