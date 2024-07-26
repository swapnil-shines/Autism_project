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
        <title>searching Nearby Place</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="nearbyplace.css">
        
    
    </head>
    <body>

   

          
          <div id="navbar-placeholder"></div>
        <div class="container-fluid">
            <div class="container">
               <div class="search">
                   <a href="page_help.php"><h1>Back</h1><a>
                   <input type="text"name="" id="find" placeholder="Search Here..." onkeyup="search()">
               </div>
               <div class="product-list">
                
                <?php
                    while($row=mysqli_fetch_assoc($all_doctor)){
                
                ?>
                <div class="product">
                    <img src="./pictures/<?php echo $row['pic']; ?>" height="200" width="200">
                    <h3><a href="" target="_blank"><?php echo $row["name"];?></a></h3>
                    <h4><?php echo $row["chamber"];?></h4>
                    <h4><?php echo $row["designation"];?></h4>
                    
                    <h4><?php echo $row["appointment"];?></h4>
                </div>
                <?php } ?>

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
        
    </body>
</html>