

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar and Cards</title>
</head>
<style>

body {
    font-family: Arial, sans-serif;
    
    padding: 0;
    height: 100vh; /* Set the height to 100% of the viewport height */
    box-sizing: border-box;
    background: url("3716313.jpg");
    background-size: 45%;
    background-repeat: no-repeat;
    background-position: left 30% bottom; /* Center horizontally and align to the bottom */
}
    .containner{
        display: flex;
        flex-wrap: wrap;
        justify-content: right;
        padding: 20px;
        margin-top: 150px;
        
        margin-right:300px;
        border-radius: 50%;
        
    }
    .card {
    border: 1px solid #ddd;
    border-radius: 8px;
    margin: 10px;
    padding: 15px;
    width: 300px;
    height: 300px; /* Corrected the height value */
    justify-content: center;
    background-color: palevioletred;
    margin-left: 700px; /* Move the card to the right */
    margin-right: 0px; 
    background-color: palevioletred;
    border: 1px solid #ddd;
    border-radius: 8px;  /* Reset the right margin */
}
    .card h2{
        color:black;
    }

</style>
<body>
<section>
<div class="containner">

<a href="final_nearby.php"><div class="card">
        <h2>Nearby School</h2>
        <p>Search Nearby School here.</p>
    </div></a>
    <a href="final_doctor.php"><div class="card">
        <h2>Doctor Appointment</h2>
        <p>Search Doctor here.</p>
    </div></a>
    



</div>
</section>
<?php require '400.php'; ?>
</body>
</html>
