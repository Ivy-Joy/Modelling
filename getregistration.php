<?php

require('config.php');

if (isset($_POST['firstname'])){

	$filename = $_FILES["uploadImage"]["name"];
    $tempname = $_FILES["uploadImage"]["tmp_name"];    
        $folder = "images/".$filename;



	$first = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$dob = $_POST["dob"];
	$email = $_POST["email"];
	$phone = $_POST["phoneNo"];
	$gender = $_POST["gender"];
	$username = $_POST["username"];
	$state = $_POST["state"];
	$county = $_POST["county"];
	$zip =$_POST["zip"];
	$experience =$_POST["experience"];
	$height = $_POST["heigth"];
	$model = $_POST["model-type"];
	$password = $_POST["password"];
	$dy = $_POST["dy"];



	// printed values

			echo 'Your lastname is'.$_POST["lastname"]."<br>";
			echo 'Your date of birth is'.$_POST["dob"]."<br>";
			echo 'Your email is'.$_POST["email"]."<br>";
			echo 'Your phone number is'.$_POST["phoneNo"]."<br>";
			echo 'Your gender is'.$_POST["gender"]."<br>";
			echo 'Your username is'.$_POST["username"]."<br>";
			echo 'Your password is'.$_POST["password"]."<br>";
			echo 'Your dy is'.$_POST["dy"]."<br>";
			echo 'Your  county is'.$_POST["county"]."<br>";
			echo 'Your zip is'.$_POST["zip"]."<br>";
			echo 'Your experience is'.$_POST["experience"]."<br>";
			echo 'Your heigth is'.$_POST["heigth"]."<br>";
			echo 'Your model-type is'.$_POST["model-type"]."<br>";


	$sql = "INSERT INTO `users` ( firstname, lastname, dob, email, phone, gender, type, state, county, zip, experince, height, username, password, about, profileImage )
		VALUES('$first', '$lastname', '$dob', '$email', '$phone',' $gender', '$model', '$state', '$county', '$zip', '$experience', '$height', '$username',' $password', '$dy','$filename')";

		if ($conn->query($sql) === TRUE) {

			 if (move_uploaded_file($tempname, $folder))  {
				 $msg = "Image uploaded successfully";
				 header('Location: login.html');
				// echo 'Your imagename is'.$filename."<br>";
				echo "New record and image created successfully";
				}
				else{
					$msg = "Failed to upload image";
				 }
		} 
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

}
else{
	echo "Values required";
}
?>