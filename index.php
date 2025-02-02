<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>


<?php
include'connection.php';

$name = "";


if (isset($_POST['submit'])){
    $name=$_POST['name'];
}

$sql = "INSERT INTO operation (name) VALUES ('$name')";
//$sql = "INSERT INTO operation (name) VALUES ('$name')";
if ($conn->query($sql)) {
    echo "Data inserted done";
} else {
    echo "Error: " . $conn->error;
}

$sql = "SELECT name FROM operation";
$result = $conn->query($sql);


?>

<h2>Simple Form</h2>
<form action="" method="POST" >
    <label for="name" >Name</label>
    <input type="text" name="name" placeholder="Name">
    <button type="submit" name="submit">Submit</button>
</form>



<h2>Data from Database</h2>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Check if there are any rows to display
        if ($result->num_rows > 0) {
            // Output data of each row (only 'name' field)
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['name'] . "</td></tr>";
            }
        } else {
            echo "<tr><td>No data available</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
