<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review & Rating System in PHP & Mysql using Ajax</title>


    <link rel="stylesheet" href="review.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css"
        integrity="sha512-sVSECYdnRMezwuq5uAjKQJEcu2wybeAPjU4VJQ9pCRcCY4pIpIw4YMHIOQ0CypfwHRvdSPbH++dA3O4Hihm/LQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    < <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


</head>

<body style="background: url('images/review.jpeg')">

    <div class="container">
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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
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
                                <li class="nav-item">
                                    <a class="nav-link " href="#">Contact</a>
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

        <h1 href="#"class="text-center"
            style="margin-top: 50px; margin-bottom: 50px;font-weight:bold; color:black;text-decoration:underline;">
          Post to Know More</h1>
          <a href="../Com.php" class="text-center" style="margin-left: 550px;font-size:1.6rem; margin-bottom: 50px;font-weight:bold; color:black;text-decoration:underline;" >Join Today!!</a>

        
        <div class="mt-5 review-container" id="review_content"></div>
    </div>
</body>

</html>




<script>

    $(document).ready(function () {

       
        
        function reset_background() {
            for (var count = 1; count <= 5; count++) {

                $('#submit_star_' + count).addClass('star-light');

                $('#submit_star_' + count).removeClass('text-warning');

            }
        }

        $(document).on('mouseleave', '.submit_star', function () {

            reset_background();

        });

        

        $('#save_review').click(function () {

            var name = $('#name').val();

            var experience = $('#experience').val();

            if (name == '' || experience == '') {
                alert("Please Fill Both Field");
                return false;
            }
            else {
                $.ajax({
                    url: "index_experience.php",
                    method: "POST",
                    data: { name: name, experience: experience },
                    success: function (data) {
                        $('#review_modal').modal('hide');

                        load_rating_data();

                        alert(data);
                    }
                })
            }

        });

        load_rating_data();

        function load_rating_data() {
            $.ajax({
                url: "index_experience.php",
                method: "POST",
                data: { action: 'load_data' },
                dataType: "JSON",
                success: function (data) {

                 



                    if (data.review_data.length > 0) {
                        var html = '';

                        for (var count = 0; count < data.review_data.length; count++) {
                            html += '<div class="row mb-3">';

                            html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">' + data.review_data[count].name.charAt(0) + '</h3></div></div>';

                            html += '<div class="col-sm-11">';

                            html += '<div class="card">';

                            html += '<div class="card-header"><b>' + data.review_data[count].name + '</b></div>';

                            html += '<div class="card-body">';

                            

                            html += '<br />';

                            html += data.review_data[count].experience;

                            html += '</div>';

                            html += '<div class="card-footer text-right">On ' + data.review_data[count].datetime + '</div>';

                            html += '</div>';

                            html += '</div>';

                            html += '</div>';
                        }

                        $('#review_content').html(html);
                    }
                }
            })
        }

    });

</script>