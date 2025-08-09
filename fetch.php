<?php 
	// Headers
	header('Access-Control-Allow-Origin: http://localhost:3000');
	header('Content-Type: application/json, charset=utf-8');
	header('Access-Control-Allow-Methods: POST, PUT, GET');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With, Accept, Origin');


	$inp = file_get_contents('neural.json');
	// $inp = file_get_contents("php://input");
	$tempArray = json_decode($inp);
	$jsonData = json_encode($tempArray);
	echo $jsonData;
	// echo "success";


	// DB connection
	$new_staff = "INSERT INTO `staff` (`staff_id`, `name`, `surname`, `face_id`, `time`) VALUES (NULL, 'Precious', 'Hope', '12345688', current_timestamp())";
 ?>
