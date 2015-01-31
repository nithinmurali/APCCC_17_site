<?php
	//error_reporting(0);
	@require("include/dbcon.php");
	
	$first_name = preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['first-name']);
	$last_name = preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['last-name']);
	$type = preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['type']);
	$type = preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['type']);
	$insti_name = preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['colgName']);
	$email = $_POST['email'];
	$title = preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['title']);
	$presenting_type = $_POST['paperType'];
	$presenting_author = preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['presenting_author']);
	@$author_name = preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['a-name1']) . ";" . preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['a-name2']) . ";" . preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['a-name3']) . ";" . preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['a-name4']) . ";" . preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['a-name5']) ;
	@$author_affliation = preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['a-affliation1']) . ";" . preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['a-affliation2']) . ";" . preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['a-affliation3']) . ";" . preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['a-affliation4']) . ";" . preg_replace("/[^[:alnum:][:space:]]/ui", '', $_POST['a-affliation5']) ;
	@$author_email = $_POST['a-email1'] . ";" . $_POST['a-email2'] . ";" . $_POST['a-email3'] . ";" . $_POST['a-email4'] . ";" . $_POST['a-email5'] ;
	
	$errmsg = "sucess";
 	$err = 0;

	$regex = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$"; 
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) ) {
	    $err = 1;
	    $errmsg = $email . " is an invalid email. Please try again.";
	} 

	if ( !strcmp($presenting_type,'oral') && !strcmp($presenting_type,'poster') ) {
		$err=1;
		$errmsg = $presenting_type . " presenting type can only be poster or oral";
	}

	$sql = "SELECT * FROM user_data where first_name = '$first_name' and last_name = '$last_name' and email = '$email' ";
	$result = $conn->query($sql);
	
	if ($err != 1) {
			
		if ($result->num_rows > 0) {
		 
			$row = $result->fetch_assoc();
		    $err = 2;
		    $errmsg = "existing"; 
		
		} else {
			$sql = "INSERT INTO user_data ( first_name, last_name, type, insti_name, email, title, presenting_author,presentingType, author_name, author_affliation, author_email ) VALUES ( '$first_name', '$last_name', '$type', '$insti_name', '$email', '$title', '$presenting_author', '$presenting_type' , '$author_name', '$author_affliation', '$author_email' )";
			if ($conn->query($sql) === TRUE) {
			    $err=0;
			} else {
			    $err = 1;
			    $errmsg = $conn->error;
			}
		}
	}

	$conn->close();

	$data = array('err' => $err, 'errdata' => $errmsg);
	echo json_encode($data);
?>