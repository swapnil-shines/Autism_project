<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$connect = new PDO("mysql:host=localhost;dbname=se", "root", "");

if (isset($_POST["name"]) && isset($_POST["experience"])) {
    $data = array(
        ':name' => $_POST["name"],
        ':experience' => $_POST["experience"],
        ':datetime' => time()
    );

    $query = "INSERT INTO expereince (name, experience, datetime) VALUES (:name, :experience, :datetime)";
    $statement = $connect->prepare($query);
    $statement->execute($data);

    echo "Experience successfully submitted";
}

if(isset($_POST["action"]) && isset($_POST["action"]))
{
	$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;
	$review_content = array();

	$query = "SELECT * FROM expereince ORDER BY ex_id DESC";

	$result = $connect->query($query, PDO::FETCH_ASSOC);

	foreach($result as $row)
	{
		$review_content[] = array(
			'name'		=>	$row["name"],
			
			'experience'		=>	$row["experience"],
			'datetime'		=>	date('l jS, F Y h:i:s A', $row["datetime"])
		);

	

	}

	$output = array(
		
		'review_data'		=>	$review_content
	);

	echo json_encode($output);

}

?>