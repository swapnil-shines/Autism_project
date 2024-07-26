<?php
    $_servername="localhost";
    $username="root";
    $password="";
    $db_name="se";
    $conn=new mysqli($_servername,$username,$password,$db_name,3306);
    if($conn->connect_error){
        die("connection failed".$cond->connect_error);
    }
    echo "";
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Id</title>
        <link rel="stylesheet" href="admin_pass.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2>Password View</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li><a href="admin_dash.php">
                        <span>Back</span></a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <div class="user-wrapper">
                
                    
                
                </div>
            </header>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>"name="form" method="POST">
        <div class="form">
            <h2>Viweing Password</h2>
            <input type="email" name="user_email"placeholder="Enter Email" class ="box" required required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
     
            <a href="admin_pass.html">
            <button type="Submit"class="boxx">Go</button></a>
        </div>
</form>
<?php
       

       if($_SERVER["REQUEST_METHOD"]=="POST"){
           $user_email=$_POST['user_email'];
           
           $sql="select * from login where email='$user_email'";
                   $result=mysqli_query($conn,$sql);
                   $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                   $count=mysqli_num_rows($result);
                   session_start();
                   $_SESSION['user_email']=$_POST['user_email'];
                  
                   if($count==1){
                       header("Location:admin_pass_view.php");
                   }
                   else{
                       echo '<script>
                             window.location.href="admin_pass.php";
                             alert("Login failed to prescription.Invalid student ID!!")
                             </script>';
                             
                   }
       }



       ?>
    </body>
</html>