<!DOCTYPE html>
<html>
  <header>
  <link rel="stylesheet" href="Login.css">
  <?php
  require "connect.php";
  date_default_timezone_set('UTC');
  echo date('l, j F');
  

  ?>
    
  </header>
  <embed name="Harambe SONG" src="HARAMBE TRIBUTE SONG.mp3" loop="false" hidden="true" autostart="true">
<div class="login-page">

    
    <div class="form">
    
      <form method = "post" class="login-form" action = "login_check.php">
        <input type="text" placeholder="Enter your username here" name= 'username'/>
        <input type="password" placeholder="Enter your password here" name ='Pw'/>
        <input type="submit" class = "button"  value="Submit"/>

        

      </form>
      

    </div>
    
  </div>
  
</html>
