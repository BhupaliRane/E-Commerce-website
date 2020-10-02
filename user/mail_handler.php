<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['id'];
		$size=$_POST['size'];
		$msg=$_POST['msg'];

		$to='siddharth.borge99@gmail.com'; // Receiver Email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Id with quantity :".$phone."\n"."Id with size:".$size."\n"."Address :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
