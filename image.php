<?php 


if(isset($_FILES['image'])){
    echo"<pre>";
print_r($_FILES);
echo"</pre>";

$file_name = $_FILES["image"]["name"];
$file_type = $_FILES["image"]["type"];
$file_size = $_FILES["image"]["size"];
$file_tmp_name = $_FILES["image"]["tmp_name"];


move_uploaded_file($file_tmp_name,"uploadimage/". $file_name);

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data" >
   <input type="file" name="image" id=""> <br>
   <input type="submit" name="submit" id="">
   </form>
    
</body>
</html>