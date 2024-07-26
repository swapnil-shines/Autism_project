
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
                if(!session_id()){
                    session_start();
                    
                }
                
                $user_email=$_SESSION['user_email'];
                if(isset($_SESSION['user_email']) && $_SESSION['user_email']){
                
                }
                else{
                    header("location:admin_dash.php");
                }

            ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="admin_pass_view.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2>Password View</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li><a href="admin_pass.php">
                        <span>Back</span></a>
                    </li>
                    <li><a href="admin_dash.php">
                        <span>Dashboard</span></a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <div class="user-wrapper">
                
                    
                    <div>
                    <h4><?php    if(isset($_SESSION['user_email'])){
                        echo ( $_SESSION['user_email']);
                        $user_email=$_SESSION['user_email'];
                        $sql="select * from login  where email='$user_email' ";
                        $result=mysqli_query($conn,$sql);
                        

                        
                       
                    }
                        ?></h4>
                        
                    </div>
                
                </div>
            </header>
            
        </div>
        <table>
            <div class="card-body">
                <thread>
                    <tr>
                        
                        <th>User Email</th>
                        <th>Password</th>
                        
                    </tr>
                </thread>
                <tbody>
                <?php    while($row = mysqli_fetch_array($result)){    ?>
                    <tr>
                
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['pass'];?></td>
                        
                        
                    </tr>
                    <?php }?>
                  
                </tbody>
            </div>
        </table>
    </body>
</html>