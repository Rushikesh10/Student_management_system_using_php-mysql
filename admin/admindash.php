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
<head><title>Admin Dashboard</title><style>
    .example_a {
color: #fff !important;
text-transform: uppercase;
text-decoration: none;
background: #ed3330;
padding: 20px;
border-radius: 5px;
display: inline-block;
border: none;
transition: all 0.4s ease 0s;
}
       .example_b {
color: #fff !important;
text-transform: uppercase;
text-decoration: none;
background: green;
padding: 20px;
border-radius: 5px;
display: inline-block;
border: none;
transition: all 0.4s ease 0s;
}
       .example_c {
color: #fff !important;
text-transform: uppercase;
text-decoration: none;
background: blue;
padding: 20px;
border-radius: 5px;
display: inline-block;
border: none;
transition: all 0.4s ease 0s;
}
       .example_d {
color: #fff !important;
text-transform: uppercase;
text-decoration: none;
background: orange;
padding: 20px;
border-radius: 5px;
display: inline-block;
border: none;
transition: all 0.4s ease 0s;
}
    </style></head>
<body>
    
    <h1 align="center">Admin Dashboard</h1>
   <div class="button_cont" align="center"><a class="example_a" href="addstudent.php" target="_blank" rel="nofollow noopener">Add Student</a></div><hr>
      
   <div class="button_cont" align="center"><a class="example_b" href="updatestudent.php" target="_blank" rel="nofollow noopener">Update Student</a></div><hr>
      
   <div class="button_cont" align="center"><a class="example_c" href="deletestudent.php" target="_blank" rel="nofollow noopener">Delete Student</a></div>
      <hr>
   <div class="button_cont" align="center"><a class="example_d" href="../logout.php" target="_blank" rel="nofollow noopener">Logout</a></div>

    <hr>
    
    
    
    
    
    </body></html>