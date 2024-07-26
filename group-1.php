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
    <title>Donation Page</title>
    <link rel="shortcut icon" href="favicon.ico" type="images/x-icon" />
    <link rel="stylesheet" href="css/lightbox.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css"
        integrity="sha512-sVSECYdnRMezwuq5uAjKQJEcu2wybeAPjU4VJQ9pCRcCY4pIpIw4YMHIOQ0CypfwHRvdSPbH++dA3O4Hihm/LQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="group-1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
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
                                <a class="nav-link" href="page.php">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="group-1.php">Donate Now</a>
                            </li>
                            
                            <a class="nav-link" id="form-open" href="loggg.php">Login</a>
                            </li>
                        </ul>
                        <div class="header_right">
                            <div class="text-lg-end">
                                <span>Call us</span>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h2>Make a Donation</h2>
                </div>
                <div class="content">
                    <form action="donation_process.php" method="post" class="donation-form">
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount to be Paid:</label>
                            <input type="number" id="amount" name="amount" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="payment_option">Payment Option:</label>
                            <select id="payment_option" name="payment_option" class="form-control" required>
                                <option value="bkash">bKash</option>
                            </select>
                        </div>
                        <button type="submit" class="main-btn">Donate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz8z1b1rI+V0vY1SHPE0QwLgPWRrTv6a2wp7JSTIaxU6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-gY6p2+CWzpb2luey5KDNLTX9tTFmPbKpAF4DaFT5McxDmrk3w5q5Dhu57DHTnb1N" crossorigin="anonymous"></script>
</body>
</html>
