<?php
include 'config.php';

// Retrieve data from the database
$sql = "SELECT * FROM community_engagement";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Engagement Data</title>
    <link rel="stylesheet" href="dis_com.css">
</head>
<body>

<div class="container">
    <div class="title">Community Engagement Data</div>
    <?php if ($result->num_rows > 0) : ?>
        <ul>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <li>
                    <strong>Name:</strong> <?php echo $row['full_name']; ?><br>
                    <strong>Email:</strong> <?php echo $row['email']; ?><br>
                    <strong>Mobile No:</strong> <?php echo $row['mobile_no']; ?><br>
                    <strong>Relative:</strong> <?php echo $row['relative']; ?><br>
                    <strong>Preferred Language:</strong> <?php echo $row['preferred_language']; ?><br>
                    <strong>Age Range:</strong> <?php echo $row['age_range']; ?><br>
                    <strong>Reason for Engagement:</strong> <?php echo $row['reason_for_engagement']; ?><br>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else : ?>
        <p>No data available.</p>
    <?php endif; ?>

    <a href="Com.php">Go back to form</a>
</div>

</body>
</html>
