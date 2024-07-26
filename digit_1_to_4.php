
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
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>Drag and Drop</title>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        
        <link rel="stylesheet" href="animal_matching.css">
        <script src="animal_matching.js" defer></script>
    </head>
    <body>
        
        <div id="navbar-placeholder"></div>
        <section class="draggable-elements">
        
            <i class=" fa-solid fa-1 draggable" draggable="true"style="color: red;" id="1"></i>
            <i class="fa-solid fa-2 draggable"draggable="true" style="color: rgb(75, 232, 114); " id="2"></i>
            <i class="fa-solid fa-3 draggable" draggable="true"style="color: orange; " id="3"></i>
            <i class="fa-solid fa-4 draggable"draggable="true" style="color: rgb(4, 0, 255) ;" id="4"></i>
            
        </section>
        <section class="droppable-elements">
            <div class="droppable" data-draggable-id="4"><span>4</span></div>
            <div class="droppable" data-draggable-id="1"><span>1</span></div>
            <div class="droppable" data-draggable-id="3"><span>3</span></div>
            <div class="droppable" data-draggable-id="2"><span>2</span></div>
           
        </section>
       
    <! <!--<script>
            // Fetch and inject the navbar
            window.addEventListener('DOMContentLoaded', () => {
            fetch('404.html')
            .then(response => response.text())
            .then(data => {
             document.getElementById('navbar-placeholder').innerHTML = data;
             // Any additional logic related to the navbar functionality can be added here
            })
           .catch(error => console.error(error));
            });
        </script>-->
        <?php require '404.php'; ?>
       
    </body>
</html>