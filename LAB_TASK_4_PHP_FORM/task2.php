<?php
$email="";
if(isset($_REQUEST['submit']))
{
	$email=$_REQUEST['email'];
	if($email=="")
	{
		echo"Invalid email";
	}
	else
	{
		echo $email;
	}
}
else
{
	echo "Invalid input";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend><h3>EMAIL</h3></legend>

	 <input type="email" name="email" value="<?php echo $email; ?>" /><br><br>
	 <hr>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>