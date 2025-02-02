<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<?php
//database Include
include "connection.php";

//Variable declaration
$FirstName="";
$LastName="";
$FatherName="";
$MotherName="";

//condition apply
if(isset($_POST['submit'])){

    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $FatherName=$_POST['FatherName'];
    $MotherName=$_POST['MotherName'];
}

//sql entry

$sql = "INSERT INTO form (FirstName, LastName, FatherName,MotherName) VALUES ('$FirstName', '$LastName','$FatherName','$MotherName' )";

if ($conn->query($sql)) {
    
} else {
    echo "Error: " . $conn->error;
}

?>

    
<form action="" method="POST">

<label for="">First Name</label>
<input type="text" name="FirstName" placeholder="FirstName">
<label for="">Last Name</label>
<input type="text" name="LastName" placeholder="LastName">
<label for="">Father Name</label>
<input type="text" name="FatherName" placeholder="FatherName">
<label for="">Mother Name</label>
<input type="text" name="MotherName" placeholder="MotherName">
<br>
<button type="submit" name="submit">Submit</button>
</form>



</body>
</html>