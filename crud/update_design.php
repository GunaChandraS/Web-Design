<?php include("connection.php"); 

$id=$_GET['id'];

$query ="SELECT * FROM employees where id='$id'" ;
$data= mysqli_query ($conn, $query);
$total= mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
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
            <form action="#" method="POST">
            <div class="title"> Update Details</div>
            <div class="form">
            <div class="input_field">
                <label for="firstname">First Name</label>
                <input type="text" value="<?php echo $result['firstname'];?>" class="input" name="firstname" required>
            </div>
            <div class="input_field">
                <label for="lastname">Last Name</label>
                <input type="text"value="<?php echo $result['lastname'];?>" class="input" name="lastname" required>
            </div>
            <div class="input_field">
                <label for="email">Email</label>
                <input type="email" value="<?php echo $result['email'];?>" class="input" name="email" required>
            </div>
            <div class="input_field">
                <label for="phone">Phone</label>
                <input type="text" value="<?php echo $result['phone'];?>" class="input" name="phone">
            </div>
            <div class="input_field">
                <label for="position">Position</label>
                <input type="text"value="<?php echo $result['position'];?>" class="input"  name="position">
            </div>
            <div class="input_field">
                <input type="submit" value="Update" class="btn" name="update">

            </div>
        </div>
    </form>
    </div>
</body>
</html>

<?php
    if($_POST['update'])
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email    = $_POST['email'];
        $phone    =$_POST['phone'];
        $position =$_POST['position'];

        $query = "UPDATE employees set firstname='$firstname', lastname='$lastname', email='$email', phone='$phone', position='$position' WHERE id='$id'";
        $data= mysqli_query($conn,$query);
        if($data)
        {
            echo "<script>alert('Records Updated');</script>";
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />
        
            <?php

        }
        else
        {
            echo "<script>alert('Failed to Update');</script>";
        }
    }

?>
