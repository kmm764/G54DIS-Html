<!DOCTYPE html>
<html>
        <head>
                <td width="30%" align="left"><img src="UniLogo.bmp" alt="UoN" border="0" hspace="0" vspace="0" height="80" width="160" align="center"></a></td>
            
                <td width="43%" align="right"><img src="Harambe.jpg" alt="ASAP" border="0" hspace="0" vspace="0" width="160" align="right"></a></td>
            
        </head>

<link rel="stylesheet" href="ButtonStyles.css">
<?php
require "connect.php";
?>
<body>

<h2>My Modules</h2>


<div class="navbar">
  <a href="Home.php"> Home</a> 
  <a class="active" href="MyModules.php"> My Modules</a> 
  <a href="MyMarks.php"> My Marks</a>
  <a href="Login.php">Log out</a>
</div>
<?php
        echo '<table align="left"

                cellspacing="5" cellpadding="8">
                <tr></td>
                <td align="left"><b>Code</b></td>
                <td align="left"><b>Title</b></td>
                <td align="left"><b>Credit</b></td>
                <td align="left"><b>Semester</b></td>
                <td align="left"><b>Department</b></td></tr>';

        session_start();
        $Student_ID = $_SESSION['Student_ID'];
        $sql = "SELECT * FROM Student_Module WHERE Student_ID = '$Student_ID'";
        $result =  mysqli_query($conn, $sql);

        While($row = mysqli_fetch_array($result)){
                $Module_ID = $row['ModuleID'];
                $sql2 = "SELECT * FROM Modules WHERE ModuleID = '$Module_ID'";
                $result2 = mysqli_query($conn,$sql2);
                While($row = mysqli_fetch_array($result2)){
        
                        echo '<tr><td align="left"cellspacing="5" cellpadding="8">' .
                                $row['ModuleID'] . '</td><td align="left">' .
                                $row['ModuleName'] . '</td><td align="left">' .
                                $row['Credits'] . '</td><td align="left">' .
                                $row['semester'] . '</td><td align="left">' ;
                                #$row['DepartmentID'] . '</td><td align="left">';
                        $Department_ID = $row['DepartmentID'];
                        $sql3 = "SELECT * FROM Departments WHERE DepartmentID = '$Department_ID'";
                        $result3 = mysqli_query($conn,$sql3);
                        While($row = mysqli_fetch_array($result3)) {
                                echo $row['Department_Name' ];
                        }
                        
        


          
          #echo "Username :{$row['Username']}  <br> ".
          #"--------------------------------<br>";
          #echo "Password :{$row['Password']}  <br> ".
          #"--------------------------------<br>";
                }
        }

?>


</body>
</html> 