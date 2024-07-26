<?php
error_reporting(0);

$msg = "";
$db = mysqli_connect("localhost", "root", "", "se");



// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $name=$_POST["name"];
    $designation=$_POST["designation"];
    $address=$_POST["address"];
    $number=$_POST["appointment"];


	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./doctor_pic/" . $filename;

	

	// Get all the submitted data from the form
	$sql = "INSERT INTO doctor (name,designation,chamber,appointment,pic) VALUES ('$name','$designation','$address','$number','$filename')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo '<script>
                              window.location.href="upload_doctor.php";
                              alert("Successfully Uploaded")
                              </script>';
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
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
                <h2>Upload Doctor</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    
                    <li><a href="admin_dash.php">
                        <span>Back</span></a>
                        <li><a href="view_doctor.php">
                        <span>View</span></a>
                    

                </ul>
            </div>
        </div>
       
        <section id="upload_container">
            <form action="" method="POST" enctype="multipart/form-data" >
                <input type="text" name="name" id="name" placeholder="Enter Doctor Name" required>
                <input type="text" name="designation" id="designation" placeholder="Enter designation" required>
                <input type="text" name="address" id="address"placeholder="Enter chamber Address"required >
                <input type="tel" name="appointment" id="appointment" required pattern="01[1-9]{1}[0-9]{8}"placeholder="Enter Appointment Number as 01xxxxxxxxx format">
                <input type="file" name="uploadfile" id="uploadfile" required  >
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
</form>
</section>
</body>
</html>