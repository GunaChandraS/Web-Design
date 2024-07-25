<?php
include("connection.php");
$id=$_GET['id'];
$query = "DELETE FROM employees WHERE id= '$id'";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Records Deleted');</script>";
    ?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />
    <?php
    
}
else{
    echo "<script>alert('Failed to delete');</script>";
}
?>