<?php
function showdetails($standard,$rollno){   
include('dbcon.php');
$qry= "SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard` = '$standard'" ;
$run=mysqli_query($con,$qry);
if(mysqli_num_rows($run)>0)
{
    $data=mysqli_fetch_assoc($run);
    ?>
<table border="1" width=500 align=center>
    <tr><th>Roll Number</th><td><?php echo $data['rollno'];?></td></tr>
    <tr><th>Full Name</th><td><?php echo $data['name'];?></td></tr>
    <tr><th>City</th><td><?php echo $data['city'];?></td></tr>
    <tr><th>Parents Contact</th><td><?php echo $data['pcont'];?></td></tr>
    <tr><th>Standard</th><td><?php echo $data['standard'];?></td></tr>
    <tr><th>Image</th><td><img src="dataimg/<?php echo $data['images'];?>"style='max-width:1000px;' ></td></tr>
</table>
<?php
}
else
{
    echo "No student";
}

}
?>
