<?php

include ("../control/php.php")
$cookie_name = "user";
$cookie_value = "Alex Porter";

setcookie($cookie_name, $cookie_value,time()+86400)
?>

<html>
<head>
    <title>Lab Task 2</title>
</head>
<body>
    <?php 
if(!isset($_COOKIE[$cookie_name]))
{
 echo "farhan parbe";
}
else
{
    echo $_COOKIE[$cookie_name];
}
?> 
<h1>Registartion Form</h1>
<hr>
</hr>
<form action="" method="POST">
    <table>
        <tr>
            <td>First Name : </td><td><input type="text" name="fname">
            <?php
            echo $unameError;
            ?>
            </td>
        </tr>
        <tr>
            <td>Last Name : </td><td><input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Age : </td><td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td>Degisnation : </td><td><input type="radio" name="degisnation" value="Junior Programmer">Junior Programmer<input type="radio" name="degisnation" value="Senior Programmer">Senior Programmer<input type="radio" name="degisnation" value="Project Lead">Project Lead</td></tr>
        </tr>
        <tr>
            <td>Preferred Language : </td><td><input type="checkbox" name="java" value="JAVA">JAVA<input type="checkbox" name="php" value="PHP">PHP<input type="checkbox" name="c++"value="C++">C++</td></tr>
        </tr>
        <tr>
            <td>Email : </td><td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password : </td><td><input type="password" name="password"></td>
        </tr>
        <tr>
        <td>Please choose a file: </td><td><input type="file" name="file" value="file"></td>
        </tr>
        <tr>
            <td><input type="submit" name="Submit" value="Submit">
            <input type="reset" name="Reset" value="Reset"></td>
        </tr>

</table>
</form>
</body>
</html>