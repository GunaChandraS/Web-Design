<html>
<head>
    <title>Display</title>
    <style>
        body{
            background:purple;
        }
        table{
            background-color: white;
        }
        .update{
         background-color: green;
         color: white;
         border: 0;
         outline: 0;
         border-radius: 5px;
         height: 25px;
         width: 100px;
         font-weight: bold;
         cursor: pointer;
        }
        .delete{
         background-color: red;
         color: white;
         border: 0;
         outline: 0;
         border-radius: 5px;
         height: 25px;
         width: 100px;
         font-weight: bold;
         cursor: pointer;
        }
    </style>
</head>
</html>


<?php
include("connection.php");
error_reporting(0);

$query ="SELECT * FROM employees";
$data= mysqli_query ($conn, $query);
$total= mysqli_num_rows($data);


echo $result['firstname']." ".$result['lastname']." ".$result['email']." ".$result['phone']." ".$result['position'];

//echo $total;

if($total !=0)
{
    ?>
    <h2 align="center"><mark> Displaying All Records</mark><h2>
    <center><table border="1" cellspacing="7" width="85%">
        <tr>
        <th width="4%">ID</th>
        <th width="10%">First Name</th>
        <th width="10%">Last Name</th>
        <th width="20%">Email</th>
        <th width="10%">Phone</th>
        <th width="10%">Position</th>
        <th width="5%">Photo_picture</th>
        <th width="15%">Operations</th>
        
        </tr>

    <?php 
    while($result = mysqli_fetch_assoc($data))
    {
       echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['firstname']."</td>
                <td>".$result['lastname']."</td>
                <td>".$result['email']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['position']."</td>
                <td><img src='".$result['photo_picture']."'height='80px' width='80px'></td>
                <td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>
                <a href='delete_design.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>
            </tr>
            ";
    }
}
else{
    echo "No records found";
}

?>
</table>
</center>

<script>
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this record?');
    }
</script>
