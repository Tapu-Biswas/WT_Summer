<html>
<head>
    <link rel="stylesheet" text="css/style" href="../FT_Task2/css.css">
    <title>Lab Task 2</title>
</head>
<body>
<div class="test">
ABC Management System
</div>
<div class="test1">
We Create Future
</div>
<div class="test2">
Home  AboutUs Shop
</div>
<div class="test3">
<h1>Registration Form</h1>
</div>
<hr>
</hr>

<form action="" method="POST">
    <table>
        <tr>
        <td><p>First Name : </p></td>
        <td><p><input type="text" name="fname"></p></td>
        </tr>
        <tr>
         <td><p>Last Name : </p></td><td><p><input type="text" name="lname"></p></td>
        </tr>
        <tr>
            <p><td><p>Age : </td><td><p><input type="text" name="age"></p></td>
        </tr>
        <tr>
            <td><p>Degisnation : </p></td><td><p><input type="radio" name="degisnation" value="Junior Programmer">Junior Programmer<input type="radio" name="degisnation" value="Senior Programmer">Senior Programmer<input type="radio" name="degisnation" value="Project Lead">Project Lead</p></td></tr>
        </tr>
        <tr>
            <td><p>Preferred Language :</p> </td><td><p><input type="checkbox" name="java" value="JAVA">JAVA<input type="checkbox" name="php" value="PHP">PHP<input type="checkbox" name="c++"value="C++">C++</p></td></tr>
        </tr>
        <tr>
            <td><p>Email : </p></td><td><p><input type="email" name="email"></p></td>
        </tr>
        <tr>
            <td><p>Password : </p></td><td><p><input type="password" name="password"></p></td>
        </tr>
        <tr>
        <td><p>Please choose a file: </p></td><td><p><input type="file" name="file" value="file"></td>
        </tr>
        <tr>
            <td><input class="btn1" type="submit" name="Submit" value="Submit">
            <input class="btn2" type="reset" name="Reset" value="Reset"></td>
        </tr>

</table>
</form>
</body>
</html>