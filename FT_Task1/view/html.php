<?php
include ("../control/php.php");
?>

<html>
<head>
    <title>Lab Task 2</title>
</head>
<body>
<?php

?>
<h1>Registartion Form</h1>
<hr>
</hr>
<form action="" method="POST" enctype="multipart/form-data">
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
        <td>Please choose a file: </td><td><input type="file" name="fileToUpload"></td>
        </tr>
        <tr>
            <td><input type="submit" name="Submit" value="Submit">
            <input type="reset" name="Reset" value="Reset"></td>
        </tr>
        <tr>
            <td><input type="submit" name="show" value="show"></td>
        </tr>
        <?php
        if(isset($_POST["show"]))
        {
        $mydb=new db();
        $conobj=$mydb->openCon();
        $results=$mydb->showAll("employee",$conobj);
        if($results->num_rows > 0)
            {
                echo "<table>";
                while($myrow=$results->fetch_assoc())
                { 
                    echo"<tr>";
                    echo"<td>".$myrow["fname"]."<td>";
                    echo"<tr>";
                    echo"<td>".$myrow["lname"]."<td>";
                    echo"<tr>";
                    echo"<td>".$myrow["password"]."<td>";
                    echo"<tr>";
                    echo"<td>".$myrow["age"]."<td>";
                    echo"<tr>";
                    echo"<td>".$myrow["email"]."<td>";
                    echo"<tr>";
                    echo"<td>".$myrow["planguage"]."<td>";
                    echo"<tr>";
                    echo"<td>".$myrow["designation"]."<td>";
                    echo"<tr>";
                    echo"<td>".$myrow["picture"]."<td>";
                    echo"<tr>";
                }
                echo "<table>";
                
            }
        }
        ?>

</table>
</form>
</body>
</html>
