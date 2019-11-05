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
<html>
<body>
    <form method="post" action="addstudent.php" enctype="multipart/form-data">
    <input type="number" name="roll" placeholder="RN" required><br>
    <input type="text" name="nm" placeholder="NM" required><br>
        <input type="text" name="city" placeholder="CT" required><br>
        <input type="number" name="con" placeholder="PC" required><br>
        <input type="number" name="std" placeholder="STD" required><br>
        <input type="file" name="img" required ><br>
        <input type="submit" name="submit" value="SUBMIT" ><br>
        <a href="admindash.php">Back</a>
    </form>
    </body></html>
<?php 
if(isset($_POST['submit']))
{
    include('../dbcon.php');
    
    $roll=$_POST['roll'];
    $name=$_POST['nm'];
    $city=$_POST['city'];
    $pcon=$_POST['con'];
    $std=$_POST['std'];
    $imgname=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imgname");
    
    $qry="INSERT INTO `student`( `rollno`, `name`, `city`, `pcont`, `standard`,`images`) VALUES ('$roll','$name','$city','$pcon','$std','$imgname')";
   $run=mysqli_query($con,$qry);
    if($run==true)
    {
        ?>
<script>
alert('Data Inserted Successfully');
</script>
<?php
    }
    
    
    
    
}


?>