 <?php 
   include('../dbcon.php');
    $roll=$_POST['roll'];
    $name=$_POST['nm'];
    $city=$_POST['city'];
    $pcon=$_POST['con'];
    $std=$_POST['std'];
    $imgname=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    $id=$_POST['sid'];
    move_uploaded_file($tempname,"../dataimg/$imgname");
    
    $qry="UPDATE `student` SET `rollno` = '$roll', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standard` = '$std', `images` = '$imgname' WHERE `id` = '$id';";
   $run=mysqli_query($con,$qry);
    if($run==true)
    {
        ?>
<script>
    alert('Data Updated Successfully');
    window.open('updateform.php?sid=<?php echo $id; ?>','_self');
</script>
<?php
    }
  
    ?>