<?php
	if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];
	
	$to='krithikakumaran1998@gmail.com';
	$subject='YOUR MESSAGE IS';
	$message="Name: ".$name."\n"."Phone No: ".$phone."\n". "Wrote the following : "."\n\n".$msg;
	$headers="From: ".$email;
	
	if(mail($to,$subject,$message,$headers)){
		echo "<h1>SUCCESS</h1>";
	}
	else
	{
		echo "<h1>NOT SUCCESS</h1>";
	}

	}
?>