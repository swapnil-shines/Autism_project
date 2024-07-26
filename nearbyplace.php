<!--<?php
                $_servername="localhost";
                $username="root";
                $password="";
                $db_name="project";
                $conn=new mysqli($_servername,$username,$password,$db_name,3306);
                if($conn->connect_error){
                   die("connection failed".$cond->connect_error);
               }
                echo "";
                

            ?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <title>searching Nearby Place</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="nearbyplace.css">
        
    
    </head>
    <body>

    <!----  <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <div class="style">
              <span class="first-line">HomeHarmony<br>
                <span class="second-line">Autism</span>
                <a class="navbar-brand"><img src="img/logo2.png"></a>
            </div>
        

        
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a data-active="home" class="nav-link " href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a data-active="home" class="nav-link " href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a data-active="home" class="nav-link " href="#">Education</a>
                    </li>
                    <li class="nav-item">
                      <a data-active="home" class="nav-link " href="#">Donate</a>
                    </li>
                  </ul>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
        
                </div>
              </div>
            </nav>
        
          </section-->


        <div id="navbar-placeholder"></div>
        <div class="container-fluid">
            <div class="container">
               <div class="search">
                   <h1>All Schools</h1>
                   <input type="text"name="" id="find" placeholder="Search Here..." onkeyup="search()">
               </div>
               <div class="product-list">
                   <div class="product">
                       <img src="school-1.jpg" height="200" width="250">
                       <h3><a href="https://www.wmts.edu.bd/" target="_blank">Billiam & Marie Taylor School</a></h3>
                       <h4>CRP, Savar, Dhaka-1343</h4>
                   </div>
                   <div class="product">
                    <img src="school-1.jpg" height="200" width="250">
                    <h3><a href="https://www.wmts.edu.bd/" target="_blank">William & Marie Taylor College</a></h3>
                    <h4>CRP, Narayanganj, Dhaka-1343</h4>
                </div>
                <div class="product">
                    <img src="school-1.jpg" height="200" width="250">
                    <h3><a href="https://www.wmts.edu.bd/" target="_blank">William & Marie Taylor School</a></h3>
                    <h4>CRP, Savar, Dhaka-1343</h4>
                </div>
                <div class="product">
                    <img src="school-1.jpg" height="200" width="250">
                    <h3><a href="https://www.wmts.edu.bd/" target="_blank">William & Marie Taylor School</a></h3>
                    <h4>CRP, Savar, Dhaka-1343</h4>
                </div>
                <div class="product">
                    <img src="school-1.jpg" height="200" width="250">
                    <h3><a href="https://www.wmts.edu.bd/" target="_blank">William & Marie Taylor School</a></h3>
                    <h4>CRP, Savar, Dhaka-1343</h4>
                </div>
                <div class="product">
                    <img src="school-1.jpg" height="200" width="250">
                    <h3><a href="https://www.wmts.edu.bd/" target="_blank">William & Marie Taylor School</a></h3>
                    <h4>CRP, Savar, Dhaka-1343</h4>
                </div>
                <div class="product">
                    <img src="school-1.jpg" height="200" width="250">
                    <h3><a href="https://www.wmts.edu.bd/" target="_blank">William & Marie Taylor School</a></h3>
                    <h4>CRP, Savar, Dhaka-1343</h4>
                </div>
                <div class="product">
                    <img src="school-1.jpg" height="200" width="250">
                    <h3><a href="https://www.wmts.edu.bd/" target="_blank">William & Marie Taylor School</a></h3>
                    <h4>CRP, Savar, Dhaka-1343</h4>
                </div>
                <div class="product">
                    <img src="school-1.jpg" height="200" width="250">
                    <h3><a href="https://www.wmts.edu.bd/" target="_blank">William & Marie Taylor School</a></h3>
                    <h4>CRP, Savar, Dhaka-1343</h4>
                </div>
                <div class="product">
                    <img src="school-1.jpg" height="200" width="250">
                    <h3><a href="https://www.wmts.edu.bd/" target="_blank">William & Marie Taylor School</a></h3>
                    <h4>CRP, Savar, Dhaka-1343</h4>
                </div>
                <div class="product">
                    <img src="school-1.jpg" height="200" width="250">
                    <h3><a href="" target="_blank">William & Marie Taylor School</a></h3>
                    <h4>CRP, Savar, Dhaka-1343</h4>
                </div>
                

               </div>
            </div>
       </div>
       
       <script type="text/javascript">
         function search() {
    let filter = document.getElementById('find').value.toUpperCase();
    let items = document.querySelectorAll('.product');
    let titles = document.getElementsByTagName('h4');

    for (let i = 0; i < items.length; i++) {
        let a = items[i].getElementsByTagName('h4')[0];
        let value = a.innerHTML || a.innerText || a.textContent;

        if (value.toUpperCase().indexOf(filter) > -1) {
            items[i].style.display = "";
        } else {
            items[i].style.display = "none";
        }
    }
}


            
        </script>
        <?php require '404.php'; ?>
    </body>
</html>