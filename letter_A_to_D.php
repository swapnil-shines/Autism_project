
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
        
            <i class=" fas fa-font draggable" draggable="true"style="color: green;" id="A"></i>
            <i class="fa-solid fa-b draggable"draggable="true" style="color: #0923b5; " id="B"></i>
            <i class="fa-solid fa-c draggable" draggable="true"style="color: #dd8b10; " id="C"></i>
            <i class="fa-solid fa-d draggable"draggable="true" style="color: red ;" id="D"></i>
        </section>
        <section class="droppable-elements">
            <div class="droppable" data-draggable-id="D"><span>D</span></div>
            <div class="droppable" data-draggable-id="A"><span>A</span></div>
            <div class="droppable" data-draggable-id="C"><span>C</span></div>
            <div class="droppable" data-draggable-id="B"><span>B</span></div>
        </section>
       
        <!--<script>
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