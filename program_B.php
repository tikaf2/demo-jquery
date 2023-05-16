<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$inputNumber = intval($_POST["inputNumber"]);
	$inputText = $_POST["inputText"];

	$resultArray = array();
	for ($i = 0; $i < $inputNumber; $i++) {
		$resultArray[$i] = $inputText . " " . ($i+1);
	}

	header('Content-Type: application/json');
	echo json_encode($resultArray);
} else {
	header("HTTP/1.1 400 Bad Request");
	exit();
}
?>