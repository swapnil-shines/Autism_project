<?php
$db = mysqli_connect('localhost', 'root', '', 'se');

if (!session_id()) {
  session_start();
} 
?>
<!DOCTYPE html>
<html>

<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css">


</head>
<style>
  body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: #5cb917;
    /* Set background color as needed */
  }

  h2 {}

  .edit2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 30%;
    margin: 0px auto;
    margin-top: 0px;
    margin-left: auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
    margin-top: 500px;
    margin-left: -300px;
  }



  .btn {
    background-color: #4caf50;
    /* Set button color as needed */
    color: #fff;
    /* Set button text color as needed */
  }

  p {
    text-align: center;
  }

  .input-group {
    margin-bottom: 15px;
    /* Adjust margin as needed */
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 20px;
    color: black;
    font-weight: 100;
  }

  .main-btn {
    position: relatie;
    color: #fff;
    background: linear-gradient(to right, #0f7404, #5cb917);
    z-index: 1;
    overflow: hidden;
    border: 0.2rem solid white;
    border-radius: 3.5rem;
    text-transform: uppercase;
    padding: 1rem 3.5rem;
    font-weight: 100;
    font-size: 1.2rem;
    margin-top: 1.5rem;
    letter-spacing: 0.2rem;
  }

  .main-btn:hover {
    background: #fff;
    color: green;
    border: 0.2rem solid green;

  }
</style>

<body>






  <h2 style="margin-left: 750px;
  margin-top: 10px; color:black;">Login</h2>
  <form method="POST" action="loggg.php" class="edit2">





    <div class="input-group">
      <label>Email</label>
      <input type="text" name="email" pattern="[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]{2,}">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <label for="usertype" style="font-size:20px;color:black;">User Type:</label>
    <select name="usertype">
      <option value="user" style="font-size:20px;color:black;"> User </option>
      <option value="Admin" style="font-size:20px;color:black;"> Admin </option>
    </select>
    <div class="input-group">
      <button type="submit" class="btn main-btn" name="login_user">Login</button>
    </div>
    <p style="font-size:20px;color:black;">
      Not yet a member? <a href="register.php">Sign up</a>

    </p>
    <p style="font-size:20px;color:black;"> Forgot Password? <a href="forget_pass.php">Forget Password</a></p>

  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password' AND usertype='$usertype'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      if ($usertype == 'Admin')
        header('Location: admin_dash.php');
      else if ($usertype == 'User') {
        header('location: profilee.php');
      }
    } else {
      header('location: loggg.php');
    }

  } ?>

  <?php require '400.php'; ?>
  <script src="scr.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>