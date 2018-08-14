<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>

<?php
session_start();
	$servername = 'localhost';
	$username = 'root';
	$password = 'cws';
   $conn = new mysqli($servername, $username, $password,"sarthak");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM login WHERE username = '$myusername' and passsword = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      
      $count = mysqli_num_rows($result);
       if($count == 1) {
		   session_start("username");
         $_SESSION['login_user'] = $myusername;
        
         header("location: welcome.php");
      }else {
         echo $error = "Your Login Name or Password is invalid";
      }
   }
?>
<body>  

<h2>login page</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="">

  <div class="user">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    
  </div>
</form>

</body>
</html>

