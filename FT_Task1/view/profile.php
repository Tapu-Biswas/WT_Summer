<?php
include("../control/profileprocess.php");
?>

<html>
<body>
HI 
<h3>
    <?php 
      echo "i am " . $fname;
    ?>
</h3>
<form action="" method="POST">
    <input type="submit" name="showall" value="showall">
</form>
<form action="" method="POST">
    <input type="text" name="searchdata">
    <input type="submit" name="search" value="Search By Degisnation">
</form>

<form action="" method="POST">
<a href="../view/editprofile.php">Click Here to Edit Profile</a>
</form>

<a href="../control/logout.php">Logout</a>
</body>
</html>