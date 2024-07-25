<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operations</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link to your custom CSS file -->
    
</head>
<body>
    <div class="container ">
            <form action="#" method="POST" enctype="multipart/form-data">
            <div class="title"> Registration Form </div>
            <div class="form">
            <div class="input_field">
                <label for="firstname">First Name</label>
                <input type="text" class="input" name="firstname" required>
            </div>
            <div class="input_field">
                <label for="lastname">Last Name</label>
                <input type="text" class="input" name="lastname" required>
            </div>
            <div class="input_field">
                <label for="email">Email</label>
                <input type="email" class="input" name="email" required>
            </div>
            <div class="input_field">
                <label for="phone">Phone</label>
                <input type="text" class="input" name="phone">
            </div>
            <div class="input_field">
                <label for="position">Position</label>
                <input type="text" class="input"  name="position">
            </div>
            <div class="input_field">
                <label for="photo_picture">Upload File</label>
                <input type="file" name="uploadfile">
            </div>
            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">

            </div>
        </div>
    </form>
    </div>
</body>
</html>

<?php
    if($_POST['register'])
    {
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder= "images/".$filename;
        move_uploaded_file($tempname,$folder);

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email    = $_POST['email'];
        $phone    =$_POST['phone'];
        $position =$_POST['position'];
       

        if($firstname!= "" && $lastname !="" && $email!="" &&$phone!="" &&$position!="")
        {
        $query = "INSERT INTO employees (firstname,lastname,email,phone,position,photo_picture) values('$firstname', '$lastname', '$email' , '$phone', '$position','$folder')";
        $data= mysqli_query($conn,$query);
        if($data)
        {
            echo "<script>alert('Data Inserted into Database');</script>";

        }
        else
        {
        echo "<script>alert('Failed ');</script>";
         }
    }
    else{
           echo "<script>alert('Fill the form First');</script>";
    }
}
?>
