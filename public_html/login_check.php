<html>
    <head>
        <title> Logincheck</title>
    </head>

    <body>
    <?php
    require "connect.php";
    $userName = $_POST['username'];
    $passWord = $_POST['Pw'];
    $User_pass = FALSE;
    
    $sql = "SELECT Username, Password, Student_ID FROM Students";
    $result =  mysqli_query($conn, $sql);

    if(! $result) {
        die('Could not get data: ' . mysqli_error());
     }

    While($row = mysqli_fetch_array($result)){
        #echo $row['Username']."<br>";
        $User = $row['Username'];
        $Pass = $row['Password'];
        $ID = $row['Student_ID'];
        if($User == $userName && $Pass == $passWord){
            echo 'Correct Username and Password';
            $User_pass = TRUE;
            break;
        }

        
        #echo "Username :{$row['Username']}  <br> ".
        #"--------------------------------<br>";
        #echo "Password :{$row['Password']}  <br> ".
        #"--------------------------------<br>";
    }
    if ($User_pass == FALSE){
        header("Location: http://mersey.cs.nott.ac.uk/~psxchk/Wrong_Pw.php");
        
    } else {
        session_start();
        $_SESSION['Student_ID'] = $ID;
        header("Location: http://mersey.cs.nott.ac.uk/~psxchk/Home.php");
    }

    mysqli_close($conn);

    ?>
    </body>
</html>