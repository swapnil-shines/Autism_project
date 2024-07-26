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
    if(isset($_POST['upload'])){
        $name=$_POST['name'];
     
        $address=$_POST['address'];
      
     
        $id =$_POST['id'];
     
        mysqli_query($conn,"UPDATE nearbyschool SET name='$name',address='$address' WHERE id='$id'");
        echo "";
       
       
        
    }
    if(isset($_POST['edit'])){
        $id =$_POST['id'];
        $resultt =mysqli_query($conn,"SELECT * FROM nearbyschool WHERE id= '".$_POST['id']."'   ");
        $row=mysqli_fetch_assoc($resultt);
    
    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Animated Login Form</title>
        <link rel="stylesheet" href="upload_nearby_school.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        
    </head>
    <body>
    <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="lab la-accusoft"></span>CUET MEDICAL CENTRE</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    
                    <li><a href="admin_doctor.php"><span class="las la-igloo"></span>
                        <span>back</span></a>
                        <li><a href="index.php"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                    

                </ul>
            </div>
        </div>
        
        <section id="upload_container">

            <form action="" method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="id" id="id"  value="<?php echo $row['id'] ;   ?>">
                <input type="text" name="name" id="name"  palceholder="Enter Doctor Name"    value="<?php echo $row['name'] ;   ?>">
               
                <input type="text" name="address" id="address" palceholder="Enter Address"     value="<?php echo $row['address'] ;   ?>" >
                
               
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
                <?php   } else{
                    echo '<script>
                    window.location.href="view_nearby_school.php";
                    alert("Successfully updated")
                    </script>';
                }  ?>
</form>
</section>
</body>
</html>

