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
        $designation=$_POST['designation'];
        $chamber=$_POST['chamber'];
        $appointment=$_POST['appointment'];
     
        $id =$_POST['id'];
     
        mysqli_query($conn,"UPDATE doctor SET name='$name', designation='$designation',chamber='$chamber',appointment='$appointment' WHERE id='$id'");
        echo "";
       
       
        
    }
    if(isset($_POST['edit'])){
        $id =$_POST['id'];
        $resultt =mysqli_query($conn,"SELECT * FROM doctor WHERE id= '".$_POST['id']."'   ");
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
                <input type="text" name="designation" id="designation" palceholder="Enter Qualification"    value="<?php echo $row['designation'] ;   ?>" >
                <input type="text" name="chamber" id="chamber" palceholder="Enter Doctor Chamber Address"     value="<?php echo $row['chamber'] ;   ?>" >
                <input type="tel" name="appointment" id="appointment" required pattern="01[1-9]{1}[0-9]{8}" palceholder="Enter Doctor Appointment Numner in 01xxxxxxxxx format"   value="<?php echo $row['appointment'] ;   ?>" >
               
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
                <?php   } else{
                    echo '<script>
                    window.location.href="view_doctor.php";
                    alert("Successfully updated")
                    </script>';
                }  ?>
</form>
</section>
</body>
</html>

