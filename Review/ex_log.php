<?php
include '../config.php'; // Adjust the path as needed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];

    // Query the database to check if the user exists
    $sql = "SELECT * FROM community_engagement WHERE full_name = ? AND email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $full_name, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, redirect to the dashboard or another page
        header("Location: experience.php"); // Adjust the redirection as needed
        exit();
    } else {
        // User not found, display an error message
        $error_message = "User not found. Please make sure you have joined.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html>

<title>Community login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Practice</title>
<link rel="shortcut icon" href="favicon.ico" type="images/x-icon" />
<link rel="stylesheet" href="css/lightbox.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css"
    integrity="sha512-sVSECYdnRMezwuq5uAjKQJEcu2wybeAPjU4VJQ9pCRcCY4pIpIw4YMHIOQ0CypfwHRvdSPbH++dA3O4Hihm/LQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="css/styling.css">
<link rel="stylesheet" href="ex_log.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/responsive-style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="icon" type="image/x-icon" href="favicon.ico">


</head>
<style>


</style>

<body>
    <header id="full_nav">
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">
                        <img src=".../images/logo2.png" alt="logo">
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
                                <a class="nav-link active" aria-current="page" href="page.php">Back</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="page.php">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="group-1.php">Donate Now</a>
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
                    <form action="ex_log.php" method="post">
                        <div class="input-box">
                            <span>Name</span>
                            <input type="text" name="full_name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <span>Email</span>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="button">
                            <input type="submit" value="Login">
                        </div>
                        <?php if (isset($error_message)): ?>
                            <div class="error-message"><?php echo $error_message; ?></div>
                        <?php endif; ?>
                        <div class="not-joined">
                            <a href="../Com.php">Not joined yet? Sign up here.</a>
                        </div>
                    </form>

                </div>


            </div>
            <div class="image-section">

                <img src="../image/African male and female character wearing casual clothes.jpg" alt="Example Image">

            </div>
        </div>
    </div>


</body>

</html>