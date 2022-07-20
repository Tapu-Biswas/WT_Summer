<?php


class db{
function openCon()
{
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="labtask";
$conn=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
if($conn->connect_error)
{
  echo"cant creat an obj";
}
return $conn;
}
function interUser( $tablename,$fname,$lname, $pass, $age, $email,$picture,$pre,$destination,$conn)
{
    $sqlstr="INSERT INTO $tablename (fname,lname,age,designation,planguage,email,password,picture) VALUES('$fname','$lname',' $age','$destination','$pre','$email','$pass','$picture')";
    if($conn->query($sqlstr))
    {
        echo "Data Inserted";
    }
    else
    {
       echo "Can't Insert".$conn->error;
    }
}
function checkLogin($tablename,$fname,$pass,$conn)
{
  $sqlstr="SELECT fname,password FROM $tablename WHERE fname='$fname'and password='$pass'";
  return $conn->query($sqlstr);
}
function showAll( $tablename,$conn)
{
  $sqlstr="SELECT * FROM $tablename";
  return $conn->query($sqlstr);
}
/*function searchUserByInterest($tablename,$destination,$conn)
{
  $sqlstr="SELECT * FROM $tablename WHERE Destination='$destination'";
  return $conn->query($sqlstr);
}
function searchUserByUserName($tablename,$fname,$conn)
{
    $sqlstr="SELECT * FROM $tablename WHERE FirstName='$fname'";
    return $conn->query($sqlstr);
}

function updateUser($tablename,$fname,$lname,$age,$des,$email,$pass,$file,$conn)
{
    $sqlstr="UPDATE $tablename SET LastName='$lname',Age='$age',Email='$email',Destination='$des',
    Password='$pass', File='$file' WHERE FirstName='$fname'";
    return $conn->query($sqlstr);
}

function deleteUser($tablename,$fname,$conn)
{
    $sqlstr="DELETE from $tablename WHERE FirstName='$fname'";
    return $conn->query($sqlstr);
}
  function connClose($conn)
  {
  $conn->close();
  }
}*/
}
?>