<?php
session_start();
if($_SESSION['uid'])
{
    
}
else
{
    header('location:../login.php');
}
?>
<?php 
include('../dbcon.php');
$sid=$_GET['sid'];
$qry="SELECT * FROM `student` WHERE `id`='$sid'";
$run=mysqli_query($con,$qry);
$data=mysqli_fetch_assoc($run)
?>
<html>
<body>
    <form method="post" action="updatedata.php" enctype="multipart/form-data">
    <input type="number" name="roll" value="<?php echo $data['rollno']; ?>" required><br>
    <input type="text" name="nm" value="<?php echo $data['name']; ?>" required><br>
        <input type="text" name="city" value="<?php echo $data['city']; ?>" required><br>
        <input type="number" name="con" value="<?php echo $data['pcont']; ?>" required><br>
        <input type="number" name="std" value="<?php echo $data['standard']; ?>" required><br>
        <input type="file" name="img" required ><br>
        <input type="hidden" name="sid" value="<?php echo $data['id'];?>"><br>
        <input type="submit" name="submit" value="SUBMIT" ><br>
        <a href="admindash.php">Back</a>
    </form>
    </body></html>

    
    
