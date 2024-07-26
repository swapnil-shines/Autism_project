<?php
                $db = mysqli_connect('localhost', 'root', '', 'se');
                

            ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="styling.css">
  

</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="POST" action="login.php">
  


	  <label for="user_type">User Type:</label>
    <select name="user_type">
      <option value="user"> user </option>
      <option value="Admin"> Admin </option>
    </select>
    
  		<label>Email</label>
  		<input type="text" name="email"  pattern = "[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]{2,}"  >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $email = $_POST['email'];
  $password =  $_POST['password'];
  $user_type =  $_POST['user_type'];




  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password' ,AND usertype='$user_type'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
      if($user_type=='Admin')
          header('Location: admin_dash.php');
      else if($user_type=='user')
      header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  
} ?>
  <script src="scr.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>