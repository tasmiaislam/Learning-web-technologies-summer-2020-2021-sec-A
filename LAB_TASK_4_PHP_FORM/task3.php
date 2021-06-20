<?php
$date_of_birth="";
if(isset($_REQUEST['submit']))
{
	$date_of_birth=$_REQUEST['date_of_birth'];
	if($date_of_birth=="")
	{
		echo"Invalid DOB";
	}
	else
	{
		echo $date_of_birth;
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
			<legend><h3>DATE OF BIRTH</h3></legend>

	 <input type="date" name="date_of_birth" value="<?php echo $date_of_birth; ?>" /><br><br>
     <hr>
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>