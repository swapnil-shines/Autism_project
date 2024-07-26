

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
    $sql="select * from nearbyschool";
    $all_doctor=$conn->query($sql);
    
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="view_nearby_school.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2>Home Harmony Autism</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                
                    <li><a href="admin_dash.php">
                        <span>Back</span></a>
                        <li><a href="upload_nearby_school.php">
                        <span>Add New School</span></a>
    
                    

                </ul>
            </div>
        </div>
        <div class="main-content">
          
           
                <?php
                    while($row=mysqli_fetch_assoc($all_doctor)){
                
                
                ?>
                <div class="card">
                    <div class ="image">
                        <img src="./pictures/<?php echo $row['pic']; ?>" alt="" height="300" width="400">
                    </div>
                    <div calss ="caption">
                        <p class="Name">School Name:<h3><?php echo $row["name"];?></pp></h3>
                        <p class="propertices">Address:<h3><?php echo $row["address"];?></p></h3>
                        
                        <form action="edit_nearby_school.php" method ="POST">
                            <input type="hidden"name="id" value="<?php  echo $row['id']    ?>">
                            <input type="submit" name="edit" class="edit"value="EDIT"></input>
                        </form>
                        <form action="delete_nearby_school.php" method ="post">
                            <input type="hidden"name="id" value="<?php  echo $row['id']    ?>">
                            <input type="submit" name="delete" class="delete"value="DELETE"></input>
                        </form>
                    </div>
                </div>
                <?php } ?>
          
        </div>
    </body>
</html>