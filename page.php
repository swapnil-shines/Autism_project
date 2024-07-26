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
if(!session_id()){
    session_start();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar and Cards</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        border: 1px solid #ddd;
        background: url("");


    }

    .containner {
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
        padding: 20px;
        margin-top: 90px;
        margin-left: 110px;
        justify-content: center; /* Center the content horizontally */
        align-items: center;


    }

    .card {
        border: 1px solid #ddd;
    border-radius: 8px;
    margin: 10px;
    padding: 15px;
    width: 300px; /* Set the width */
    height: 300px; /* Set the height to match the width */
    background-color: palevioletred;
    }
    .card h2{
        color:green;
    }
</style>

<body style="background:url('image/30396.jpg') ;">
    <section>
        <div class="containner">

            <a href="color.html">
                <div class="card">
                    <h2>Color Guessing</h2>
                    <p>Guess color here.</p>
                </div>
            </a>
            <a href="math_index.html">
                <div class="card">
                    <h2>Math</h2>
                    <p>Explore your ability here.</p>
                </div>
            </a>
            <a href="animal_1.php">
                <div class="card">
                    <h2>Animal Matching 1</h2>
                    <p>Match Animal here.</p>
                </div>
            </a>
            <a href="animal_2.php">
                <div class="card">
                    <h2>Animal Matching 2</h2>
                    <p>Match Animal here.</p>
                </div>
            </a>
            <a href="digit_1_to_4.php">
                <div class="card">
                    <h2>Digit Matching 1</h2>
                    <p>Match Digit here.</p>
                </div>
            </a>
            <a href="digit_5_to_8.php">
                <div class="card">
                    <h2>Digit Matching 2</h2>
                    <p>Match Digit here.</p>
                </div>
            </a>
            <a href="digit_9_to_10.php">
                <div class="card">
                    <h2>Digit Matching 3</h2>
                    <p>Match Digit here.</p>
                </div>
            </a>
            <a href="fruites.php">
                <div class="card">
                    <h2>Fruits Matching </h2>
                    <p>Match Fruits here.</p>
                </div>
            </a>
            <a href="letter_A_to_D.php">
                <div class="card">
                    <h2>Letter Matching 1 </h2>
                    <p>Match Letters here.</p>
                </div>
            </a>
            <a href="letter_E_to_H.php">
                <div class="card">
                    <h2>Letter Matching 2</h2>
                    <p>Match Letters here.</p>
                </div>
            </a>
            <a href="letter_I_to_L.php">
                <div class="card">
                    <h2>Letter Matching 3</h2>
                    <p>Match Letters here.</p>
                </div>
            </a>
            <a href="letter_M_to_P.php">
                <div class="card">
                    <h2>Letter Matching 4</h2>
                    <p>Match Letters here.</p>
                </div>
            </a>
            <a href="letter_Q_to_T.php">
                <div class="card">
                    <h2>Letter Matching 5</h2>
                    <p>Match Letters here.</p>
                </div>
            </a>
            <a href="letter_U_to_X.php">
                <div class="card">
                    <h2>Letter Matching 6</h2>
                    <p>Match Letters here.</p>
                </div>
            </a>
            <a href="letter_Y_to_Z.php">
                <div class="card">
                    <h2>Letter Matching 7</h2>
                    <p>Match Letters here.</p>
                </div>
            </a>



        </div>
    </section>
    <?php require '400.php'; ?>
</body>

</html>