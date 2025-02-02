
<?php 
if(isset($_POST['submit'])){
    $image = $_FILES['image'];
echo"<pre>";
print_r($image);
    echo "</pre>";
    echo $image["name"];
}




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Image Upload</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .profile-card {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 15px;
            font-size: 14px;
            color: #555;
        }

        input[type="file"] {
            display: none;
        }

        .upload-btn {
            background: #3498db;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .upload-btn:hover {
            background: #2980b9;
        }

        .submit-btn {
            margin-top: 10px;
            padding: 10px;
            width: 100%;
            background: #2ecc71;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .submit-btn:hover {
            background: #27ae60;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="profile-img">Profile</div>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="image" class="upload-btn">Select Image</label>
            <input type="file" name="image" id="image" required>
            <br><br>
            <input type="submit" value="Upload Image" class="submit-btn" name="submit">
        </form>
    </div>

</body>
</html>
