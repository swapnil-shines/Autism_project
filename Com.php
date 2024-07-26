<?php
include 'config.php';

$formSubmitted = false;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $relative = $_POST['relative'];
    $preferred_language = $_POST['selectOption'];
    $age_range = $_POST['age'];

    // Insert data into the database
    $sql = "INSERT INTO community_engagement (full_name, email, mobile_no, relative, preferred_language, age_range) 
            VALUES ('$full_name', '$email', '$mobile_no', '$relative', '$preferred_language', '$age_range')";

    if ($conn->query($sql) === TRUE) {
        $formSubmitted = true;
        header("Location: Review/experience.php");
        exit(); // // Set the flag to true if the form is submitted successfully
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community apply form</title>
    <!-- Font Awesome CDN link -->
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
    <link rel="stylesheet" href="css/responsive-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="Com.css">
    <style>
        .header {
            padding: 1rem 3rem;
            width: 100%;
            /* Adjust the padding to increase the overall size */
            /* Example background color, change it as needed */
        }

        .container {
            width: 100%;
            background-color: transparent;
            box-shadow: none;
        }

        /* Example: Increase the font size of header text */
        .header h1 {
            font-size: 20px;
            /* Adjust the font size as needed */
            color: #fff;
            /* Example text color, change it as needed */
        }

        /* Example: Increase the size of header links */
        .header a {
            font-size: 20px;
            /* Adjust the font size of links as needed */
            color: #fff;
            /* Example link color, change it as needed */
        }

        .input-box input,
        .button input {
            width: 100%;
            /* Make input fields take full width */
            box-sizing: border-box;
            border: 2px solid white;
            border-radius: 5px;
          
        }



        .button input {
            background-color: black;
            color: white;
            padding: 15px;
            cursor: pointer;
            font-size:27px;
        }

        .input-box .details {
            color: green;
            font-size: 24px;
            /* Change this to the desired color value */
        }

        .footer_wrapper {
            background: url("footer_bg1.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top center;
            padding-top: 5rem;
            padding-bottom: 2rem;

        }

        .footer_wrapper h5 {
            color: var(--text-white);
            font-size: 2.5rem;
            margin-bottom: 1.25rem;
        }

        .footer_wrapper ul li {
            margin-bottom: 0.5rem;
            list-style: none;
        }

        .footer_wrapper .company_details {
            font-size: 1.4rem;

        }

        .footer_wrapper .link-widget li a {
            color: var(--text-grey);
            font-size: 1.6rem;
        }

        .footer_wrapper .link-widget li a,
        .footer_wrapper p {
            color: var(--text-grey);
            font-size: 1.6rem;
            padding-left: 1.5rem;
            position: relative;
            -webkit-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        .footer_wrapper .link-widget li a:before {
            content: '\f105';
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            left: 0.3rem;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);

        }

        .footer_wrapper .link-widget li a:hover {
            margin-left: .625rem;
            color: var(--secondary-color);

        }

        .footer_wrapper .stay-connected h5 {
            margin-bottom: 0.5rem;
        }

        .footer_wrapper .social-network {
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-top: 0.5rem;
            /* Add margin to separate heading and icons */
        }

        .footer_wrapper .social-network a {
            width: 3.5rem;
            height: 3.5rem;
            line-height: 3.2rem;
            margin: .5rem;
            display: inline-block;
            border: 0.125rem solid var(--text-grey);
            color: var(--text-grey);
            text-align: center;
            border-radius: 100%;
            -webkit-transition: all 0.3s cubic-bezier(0.625, 0.045, 0.355, 1);
            transition: all 0.3s cubic-bezier(0.625, 0.045, 0.355, 1);
        }

        .footer_wrapper .social-network a:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            color: var(--text-white);
            box-shadow: 0 0.625rem .9375rem 0 rgb(0 0 0 /10%);
            transform: translateY(-0.1875rem);
        }


        #text {
            color: black;
        }

        /* Add a media query for small screens */
        @media (max-width: 767px) {

            /* Make the navbar-toggler button white */
            .navbar-toggler {
                color: var(--bg-white);
            }

        }

        .radio-label {
            color: black;
            /* Change the color to black or any desired color */
            margin-right: 15px;
            /* Adjust spacing if needed */
        }

        /* Rest of your CSS code */
    </style>

</head>

<body style="background:;">
    <header id="full_nav">
        <div class="header">
            <div class="container" style="background-color:transparent;margin-top:0px;">
                <nav class="navbar navbar-expand-lg" style="background-color: transparent !important;
    box-shadow: none !important;">
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
    <div class="container1" style="margin-top:250px;width:50%;margin-left:450px;">
        <?php if ($formSubmitted): ?>
            <!-- Display thank you message if the form is submitted successfully -->
            <div class="title">Thank you for your submission!</div>
        <?php else: ?>
            <!-- Display the form if the form is not submitted or if there is an error -->
            <div class="title" style="color:black;font-size:30px;text-decoration:underline;">Community Engagement form</div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> <!-- Updated form tag -->
                <!-- Add name attributes to input fields -->
                <div class="input-box">
                    <span class="details">Name</span>
                    <input type="text" name="full_name" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Enter your email" required
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
                <div class="input-box">
                    <span class="details">Mobile no</span>
                    <input type="text" name="mobile_no" placeholder="Enter your Mobile no">
                </div>
                <label for="selectOption" style="color: green;
    font-size:20px;font-style:bold;font-weight:bold;">Tell us more about you! I am a... </label>
                <label class="radio-label">
                    <input type="radio" name="relative" value="Person with Autism">
                    Person with Autism
                </label>

                <label class="radio-label">
                    <input type="radio" name="relative" value="Parent" style="font-size: 18px; /* Adjust the size as needed */
    color: black;">
                    parent
                </label>

                <label class="radio-label">
                    <input type="radio" name="relative" value="Sibling">
                    Sibling
                </label>
                <label class="radio-label">
                    <input type="radio" name="relative" value="Other">
                    Other
                </label>

                <br>

                <label for="selectOption" style="color: green;
    font-size:20px;font-style:bold;font-weight:bold;">Preferred Language</label>
                <select name="selectOption" id="selectOption">
                    <option value="option1">English</option>
                    <!-- Add more options as needed -->
                </select><br>
                <label for="selectOption" style="color: green;
    font-size:20px;font-style:bold;font-weight:bold;">Age Range of Person on the Specturm</label>
                <label class="radio-label">
                    <input type="radio" name="age" value="0-3">
                    0-3
                </label>

                <label class="radio-label">
                    <input type="radio" name="age" value="4-13">
                    4-13
                </label>

                <label class="radio-label">
                    <input type="radio" name="age" value="14-18">
                    14-18
                </label>

                <label class="radio-label">
                    <input type="radio" name="age" value="19-21">
                    19-21
                </label>

                <div class="button">
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        <?php endif; ?>
    </div>

    <section class="footer_wrapper mt-3 mb-md-0" style="padding-top:14rem;
    padding-bottom:0rem;">
        <div class="container px-5 px-lg-0" style="background-color: transparent;">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <h5>HomeHarmonyAutism</h5>

                    <div class="contact-info">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-home me-3"></i>No. 96, South City ,London</a></li>
                            <li><a href="#"><i class="fa fa-phone me-3"></i>+1 222 3333</a></li>
                            <li><a href="#"><i class="fa fa-envelope me-3"></i>info@example.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <h5>Customer Support</h5>
                    <ul class="link-widget p-0">

                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Product Returns</a></li>
                        <li><a href="#">FAQ</a></li>

                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <h5>Quick Links</h5>
                    <ul class="link-widget p-0">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Donate</a></li>
                        <li><a href="#">Affliate Programs</a></li>


                    </ul>
                </div>

                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <h5>Newsletter</h5>
                    <div class="form-group mb-4">
                        <input type="email" class="form-control bg-transparent" placeholder="Enter your Email here">
                        <button type="submit" class="btn main-btn">Subscribe</button>
                    </div>
                    <h5>Stay Connected</h5>
                    <ul class="social-network d-flex align-items-center p-0">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>

                </div>

            </div>
        </div>
        <div class="container-fluid copyright-section">
            <p>Copyright <a href="#">@HomeHarmonyAutism</a>All Rights Reserved</p>
        </div>

    </section>

</body>

</html>