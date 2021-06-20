<?php
$maleStatus="checkemale";
$femaleStatus="checkfemale";
$otherStatus="checkOther";
$gen="";
if(isset($_REQUEST['submit']))
{
	$gen=$_REQUEST['gen'];
	if($gen=="Male")
	{
		echo'male';
	}
	else if($gen=='Female')
	{
		echo 'female';
	}
    else if($gen=='Other')
    {
        echo 'Other';
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
			<legend><h3>GENDER</h3></legend>

            
            <input type="radio" name="gen" value="Male"<?php $gen?>"> Male
            <input type="radio" name="gen" value="Female">Female
            <input type="radio" name="gen"  value="Other">Other
            <hr>
       <br>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>