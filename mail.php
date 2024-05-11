<?php
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile_number=$_POST['mobile_number'];
		$message=$_POST['message'];

		$to="moshekhuansari@gmail.com";
		$subject="Enquiry :";
		$message="Name : ".$name." Email : ".$email." Mobile Number : ".$mobile_number." Message : ".$message;
		$from="FROM : ".$email;

		if (mail($to, $subject, $message)) {
			echo "<script>alert('Sucessfully')</script>";
			echo "<script>window:location='index.php'</script>";
		}else{
			echo "<script>alert('Please try again')</script>";
			echo "<script>window:location='contact.php'</script>";
		}
	}
?>