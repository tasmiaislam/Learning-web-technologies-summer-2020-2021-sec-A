<?php
$deg="";
if(isset($_REQUEST['submit']))
{
	$deg=$_REQUEST['deg'];
	if($deg=='SSC')
	{
		echo 'SSC';
	}
	else if($deg=='HSC')
	{
		echo 'HSC';
	}
    else if($deg=='Bsc')
    {
        echo 'Bsc';
    }
	else if($deg=='Msc')
	{
		echo 'Msc';
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
			<legend><h3>DEGREE</h3></legend>

            
			<input type="checkbox" name="deg" value="SSC">SSC
                <input type="checkbox" name="deg" value="HSC">HSC
                <input type="checkbox" name="deg" value="Bsc">Bsc.
                <input type="checkbox" name="deg" value="Msc">Msc.
                <hr>
       <br>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>