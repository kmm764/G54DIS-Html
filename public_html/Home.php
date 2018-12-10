<!DOCTYPE html>

<head>
    <td width="30%" align="left"><img src="UniLogo.bmp" alt="UoN" border="0" hspace="0" vspace="0" height="80" width="160" align="center"></a></td>

    <td width="43%" align="right"><img src="Harambe.jpg" alt="ASAP" border="0" hspace="0" vspace="0" width="160" align="right"></a></td>

</head>
<link rel="stylesheet" href="ButtonStyles.css">
<?php
  require "connect.php";
 

  ?>

<body>

<h2>Student Homepage</h2>



<div class="navbar">
  <a class="active" href="Home.php"> Home</a> 
  <a href="MyModules.php"> My Modules</a> 
  <a href="MyMarks.php"> My Marks</a>
  <a href="Login.php">Log out</a>
</div>
<br>
<p><img src="Harambe.jpg" alt="" style="width:170px;height:250px;margin-left:100px;" ></p>
<br>
<div class="absolute">
  <?php
      session_start();
      $Student_ID = $_SESSION['Student_ID'];
      $sql = "SELECT * FROM Students WHERE Student_ID = '$Student_ID'";
      $result =  mysqli_query($conn, $sql);

      if(! $result) {
          die('Could not get data: ' . mysqli_error());
      }

      While($row = mysqli_fetch_array($result)){
        echo "--------------------------------<br>";
        echo  "Name: {$row['First_name']} {$row['Last_name']} <br>".
        "--------------------------------<br>";
        echo  "Student Number : {$row['Student_ID']} <br>".
        "--------------------------------<br>";
        $Department_ID = $row['DepartmentID'];
        $sql2 = "SELECT * FROM Departments WHERE DepartmentID = '$Department_ID'";
        $result2 = mysqli_query($conn,$sql2);
        While($row = mysqli_fetch_array($result2)){
        
          echo  "Student's Department: {$row['Department_Name']} <br>".
          "--------------------------------<br>";
        


          
          #echo "Username :{$row['Username']}  <br> ".
          #"--------------------------------<br>";
          #echo "Password :{$row['Password']}  <br> ".
          #"--------------------------------<br>";
        }
      }
    ?>
</div>
   

</body>
</html> 
