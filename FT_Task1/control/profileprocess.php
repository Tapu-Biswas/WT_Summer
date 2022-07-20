<?php
include("../model/mydb.php");
session_start();
$fname=$_SESSION["fname"];

if(isset($_POST["showall"]))
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
            echo"<td>".$myrow["designation"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["picture"]."<td>";
            echo"<tr>";
        }
        echo "<table>";
        
    }
else
    {
           echo "No data found";
    }
}
if(isset($_POST["search"]))
{
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->searchUserByInterest("employee",$_POST["searchdata"],$conobj);
if($results->num_rows > 0)
    {
        while($myrow=$results->fetch_assoc())
        {
            echo $myrow["fname"];
            echo $myrow["lname"];
            echo "<br>";
        } 
}
}
/*if(isset($_POST["delect"]))
{
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->DelectUserByFirstName("user",$_POST["delectdata"],$conobj);
}

if(isset($_POST["update"]))
{
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->updateUser("user",$_POST["fname1"],$_POST["lname1"],$_POST["password1"],$_POST["age1"],$_POST["file1"],$_POST["email1"],$_POST["degisnation1"],$conobj);
}*/



?>