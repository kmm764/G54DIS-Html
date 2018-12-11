<!DOCTYPE html>
<html>
        <head>
                <td width="30%" align="left"><img src="UniLogo.bmp" alt="UoN" border="0" hspace="0" vspace="0" height="80" width="160" align="center"></a></td>
            
                <td width="43%" align="right"><img src="penguins2.jpg" alt="ASAP" border="0" hspace="0" vspace="0" width="160" align="right"></a></td>
            <style>
                
            </style>
        </head>

<link rel="stylesheet" href="ButtonStyles.css">
<link rel="stylesheet" href="Table.css">
<?php
require "connect.php";
?>
<body>

<h2>My Modules</h2>


<div class="navbar">
  <a href="Home.php"> Home</a> 
  <a href="MyModules.php"> My Modules</a> 
  <a href="MyMarks.php"> My Marks</a>
  <a href="Login.php">Log out</a>
</div >
<br>
<br>
<br>
<br>
<div>

<p>
<?php
       
       session_start();
       $Student_ID = $_SESSION['Student_ID'];
       $sql = "SELECT * FROM Students WHERE Student_ID = '$Student_ID'";
       $result =  mysqli_query($conn, $sql);
 
       if(! $result) {
           die('Could not get data: ' . mysqli_error());
       }
 
       While($row = mysqli_fetch_array($result)){
         $Department_ID = $row['DepartmentID'];
         $sql2 = "SELECT * FROM Departments WHERE DepartmentID = '$Department_ID'";
         $result2 = mysqli_query($conn,$sql2);
         While($row = mysqli_fetch_array($result2)){
         
            echo  "<h1> Student's Department: {$row['Department_Name']} <br> </h1>".
            "<br>";
            echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{$row['Department_Name']} Department's contact number:</b> {$row['Contact_NB']} <br>".
            "<br>";
            echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{$row['Department_Name']} Department's website:</b> {$row['Website']} <br>".
            "<br>";
         
 
 
         }
       }
     ?>
     </p>
 </div>
 <h1> IT Help desk </h1>
 <p style= "padding-left:63px"><b>Contact number:</b> 0115 95 16677 </p>
 <p style= "padding-left:63px"><b>Website:</b> https://www.nottingham.ac.uk/it-services/help/service-desk/it-service-desk.aspx </p>


<div id = "BottomRight">
    <a href = "Help.php">Help? Click here</a>
  </div>


</body>
</html> 