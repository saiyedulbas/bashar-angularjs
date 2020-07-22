<?php 
include('connection.php');
$data = json_decode(file_get_contents("php://input"));


if(count($data) > 0){
	$btn = $data->btnname;
	$first = mysqli_real_escape_string($connection,$data->firstname);
	$last = mysqli_real_escape_string($connection,$data->lastname);
	if($btn == 'Add'){
		
	$query = mysqli_query($connection,"INSERT INTO students (firstname,lastname) values ('$first','$last')");
	echo 'data added';
	}
	elseif($btn == 'Update'){
		$id = $data->id;
		
	$query = mysqli_query($connection,"UPDATE students SET firstname = '$first', lastname = '$last' WHERE id = '$id'");
	echo 'data updated';
	}
	
	exit();
}