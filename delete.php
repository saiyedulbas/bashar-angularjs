<?php 
include('connection.php');
$data = json_decode(file_get_contents("php://input"));


if(count($data) > 0){
	$id = $data->id;
	
	$query = mysqli_query($connection,"DELETE FROM students WHERE id = '$id'");
	if($query){
		echo 'data deleted';
	}
	else{
		echo 'error';
	}
	exit();
}