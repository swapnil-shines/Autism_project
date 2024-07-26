
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
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Dashboard | By Code Info</title>
        <link rel="stylesheet" href="admin_dashh.css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>Drag and Drop</title>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
    </head>
    <body>
        <div class="container">
             <nav>
                <ul>
                    <li><a href="" class="logo">
                        <img src="image/logo2.png" height="100" width="75" alt="">
                        <span class="nav-item"></span>
                    </a></li>
                    <li><a href="index.php">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a></li>
                    
                    <li><a href=""><i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Logout</span></a></li>
                </ul>
             </nav>
             <section class="main">
                <div class="main-top">
                    <h1></h1>
                    
                </div>
                <div class="main-features">
                    
                    <div class="card">
                       
                        <h3>Nearby School</a></h3>
                        <p>Dedicated to find you nearby school</p>
                        <a href="upload_nearby_school.php"><button>Upload</button></a>
                        <a href="view_nearby_school.php"><button>View</button></a>
                    </div>
                    <div class="card">
                       
                        <h3>Doctors & Appointment</h3>
                        <p>Dedicated to get you appointment</p>
                        <a href="upload_doctor.php"><button>Upload</button></a>
                        <a href="view_doctor.php"><button>View</button></a>
                    </div>
                    <div class="card">
                  
                        <h3>Funding</h3>
                        
                        
                        <a href="dddd.php"><button>View</button></a>
                    </div> 
                    
                      
                </div>
                <section>
                    <div class="main-features">
                        <div class="card">
                           
                            <h3>Password View</h3>
                            <p>Dedicated to Hhelp you</p>
                           
                        <a href="admin_pass.php"><button>View</button></a>
                        </div>
                        <div class="card">
                           
                            <h3>Community</h3>
                            <p>Dedicated to create a community</p>
                            
                       <a href="dis_join.php"> <button>View</button></a>
                        </div>
                        <!--<div class="card">
                            
                            <h3>Advice And Guidelines</h3>
                            <p>Dedicated to Help you</p>
                            <button>Upload</button>
                        <button>View</button>
                        </div>
                        <div class="card">
                          
                            <h3>Advice And Guidelines</h3>
                            <p>Dedicated to Help you</p>
                            <button>Upload</button>
                        <button>View</button>
                        </div>-->
                    </div>
                </section>
             </section>
             
        </div>
        
    </body>
</html>