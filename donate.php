<!DOCTYPE html>
<html lang="en">

<head>

    <title>Donation apply form</title>
    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
    <link rel="stylesheet" href="donate.css">
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
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
    <?php
    include 'config.php'; // Include your database configuration file
    
    $formSubmitted = false; // Flag to check if the form has been submitted
    
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $full_name = $_POST['full_name'];
        $address = $_POST['address'];
        $mobile_no = $_POST['mobile_no'];
        $nid = $_POST['nid'];
        $monthly_income = $_POST['monthly_income'];
        $family_members = $_POST['family_members'];
        $disable_children = $_POST['disable_children'];
        $profession = $_POST['profession'];
        $reason_for_donation = $_POST['reason_for_donation'];

        // Insert data into the database
        $sql = "INSERT INTO donation_form (full_name, address, mobile_no, nid, monthly_income, family_members, disable_children, profession, reason_for_donation) 
                VALUES ('$full_name', '$address', '$mobile_no', '$nid', '$monthly_income', '$family_members', '$disable_children', '$profession', '$reason_for_donation')";

        if ($conn->query($sql) === TRUE) {
            $formSubmitted = true; // Set the flag to true if the form is submitted successfully
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    ?>

    <div class="container1" style="color: rgb(0, 0, 0)" >
        <?php if ($formSubmitted): ?>
            <!-- Display thank you message if the form is submitted successfully -->
            <div class="title">Thank you for your submission!</div>
        <?php else: ?>
            <!-- Display the form if the form is not submitted or if there is an error -->
            <div class="title">Donation form</div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> <!-- Updated form tag -->
                <!-- Add name attributes to input fields -->
                <div class="input-box" style="margin-top: 20px;" >
                    <span class="details" style="color: rgb(0, 0, 0); font-size:15px; ">Full name</span>
                    <input type="text" name="full_name" style="margin-left:140px;"placeholder="Enter your name" required>
                </div>
                <div class="input-box" style="margin-top: 20px;">
                    <span class="details"style=" font-size:15px; ">Address</span>
                    <input type="text" name="address" style="margin-left:150px;"placeholder="Enter your Address" required>
                </div>
                <div class="input-box" style="margin-top: 20px;">
                    <span class="details" style="font-size:15px; ">Mobile no</span>
                    <input type="text" name="mobile_no" style="margin-left:140px;"placeholder="Enter your Mobile no" required pattern="01xxxxxxxxx">
                </div>
                <div class="input-box" style="margin-top: 20px;">
                    <span class="details"style="font-size:15px; ">NID</span>
                    <input type="text" name="nid"  style="margin-left:175px;"placeholder="Enter your NID" required pattern="xxxxxxxx">
                </div>
                <div class="input-box"style="margin-top: 20px;">
                    <span class="details"style=" font-size:15px; ">Monthly Income</span>
                    <input type="text" name="monthly_income" style="margin-left:100px;" placeholder="Enter your Monthly Income" required>
                </div>
                <div class="input-box" style="margin-top: 20px;">
                    <span class="details" style=" font-size:15px; ">Number of family member</span>
                    <input type="text" name="family_members" style="margin-left:40px;"placeholder="Enter your number of family member" required>
                </div>
                <div class="input-box" style="margin-top: 20px;">
                    <span class="details"style="font-size:15px; ">Number of disable Child</span>
                    <input type="text" name="disable_children" style="margin-left:50px;"placeholder="Enter your Number of disable Child" required>
                </div>
                <div class="input-box" style="margin-top: 20px;">
                    <span class="details" style=" font-size:15px; ">Profession</span>
                    <input type="text" name="profession" style="margin-left:135px;"placeholder="Enter your Profession" required>
                </div>
                <div class="input-box" style="margin-top: 20px;">
                    <span class="details"style="font-size:15px; "> Why do you want it?</span>
                    <input type="text" name="reason_for_donation" style="margin-left:70px;"placeholder="Enter your answer" required>
                </div>
                <div class="button">
                    <input type="submit" class="btn main-btn" value="SUBMIT">
                </div>
            </form>
        <?php endif; ?>
    </div>
</body>

</html>