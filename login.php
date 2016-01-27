<?php

if (isset ($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == "Richard" && $password == "Smitty")
	{
		echo "Well Done";
	} else {
		echo "Sorry, either you do not have an account or entered an incorrect password";
	}

}

?>
