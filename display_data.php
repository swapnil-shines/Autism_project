<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Data</title>
    <!-- Add any additional styles if needed -->
    <link rel="stylesheet" href="dispaly_data.css">
</head>
<body>
    <div class="container">
        <h2>Donation Data</h2>
        <table border="1">
            <tr>
                <th>Full Name</th>
                <th>Address</th>
                <th>Mobile No</th>
                <th>NID</th>
                <th>Monthly Income</th>
                <th>Family Members</th>
                <th>Disable Children</th>
                <th>Profession</th>
                <th>Reason for Donation</th>
            </tr>

            <?php
            include 'config.php'; // Include your database configuration file

            // Fetch data from the database
            $result = $conn->query("SELECT * FROM donation_form");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['full_name'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['mobile_no'] . "</td>";
                    echo "<td>" . $row['nid'] . "</td>";
                    echo "<td>" . $row['monthly_income'] . "</td>";
                    echo "<td>" . $row['family_members'] . "</td>";
                    echo "<td>" . $row['disable_children'] . "</td>";
                    echo "<td>" . $row['profession'] . "</td>";
                    echo "<td>" . $row['reason_for_donation'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No data available</td></tr>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
