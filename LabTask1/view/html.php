<html>
<head>
    <title>Lab Task 1</title>
</head>
<body>
<h1>Registartion Form</h1>
<hr>
</hr>
<form action="../control/php.php" method="POST">
    <table>
        <tr>
            <td>First Name : </td><td><input type="text" name="fname"></td>
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
            <td>Please choose a file: </td><td><input type="file"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit">
            <input type="reset" value="Reset"></td>
        </tr>

</table>
</form>
</body>
</html>