<?php
$_servername = "localhost";
$username = "root";
$password = "";
$db_name = "se";
$conn = new mysqli($_servername, $username, $password, $db_name, 3306);
if ($conn->connect_error) {
    die("connection failed" . $cond->connect_error);
}
echo "";
$sql = "select * from nearbyschool";
$all_doctor = $conn->query($sql);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>searching Nearby Place</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="nearbyplace.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css"
        integrity="sha512-sVSECYdnRMezwuq5uAjKQJEcu2wybeAPjU4VJQ9pCRcCY4pIpIw4YMHIOQ0CypfwHRvdSPbH++dA3O4Hihm/LQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/responsive-style.css">


</head>

<body style="background-color: #add">
    <header id="full_nav">
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">
                        <img src="./images/logo2.png" alt="logo">
                    </a>

                    <div class="style">
                        <span class="first-line">HomeHarmony</span><br>
                        <span class="second-line">Autism</span>

                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="group-1.html">Donate Now</a>
                            </li>
                            
                            <a class="nav-link" id="form-open" href="loggg.php">Login</a>
                            </li>
                        </ul>
                        <div class="header_right">
                            <div class="text-lg-end">
                                <span>Call us</br>+8801783928041
                            </span>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </header>




    
    <div class="container1-fluid">
        <div class="container1">
            <div class="search">
                <a href="page_help.php">
                    <h1>Back</h1><a>
                        <input type="text" name="" id="find" placeholder="Search Here..." onkeyup="search()">
            </div>
            <div class="product-list">

                <?php
                while ($row = mysqli_fetch_assoc($all_doctor)) {
                    ?>
                    <div class="product">
                        <img src="./pictures/<?php echo $row['pic']; ?>" height="300" width="400">
                        <h3><a href="" target="_blank">
                                <?php echo $row["name"]; ?>
                            </a></h3>
                        <h4>
                            <?php echo $row["address"]; ?>
                        </h4>
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