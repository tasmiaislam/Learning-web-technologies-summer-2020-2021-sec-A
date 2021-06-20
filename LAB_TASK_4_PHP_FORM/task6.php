<?php
$Blood_Group="";
if(isset($_REQUEST['submit']))
{
	$Blood_Group=$_REQUEST['Blood_Group'];
	if($Blood_Group=="A+")
	{
		echo'A+';
	}
	else if($Blood_Group=='B+')
	{
		echo 'B+';
	}
    else if($Blood_Group=='AB+')
    {
        echo 'AB+';
    }
    else if($Blood_Group=='AB-')
    {
        echo 'AB-';
    }
    else if($Blood_Group=='O+')
    {
        echo 'O+';
    }
    else if($Blood_Group=='O-')
    {
        echo 'O-';
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
			<legend><h3>BLOOD GROUP</h3></legend>

            
            <select name="Blood_Group">
            		<option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select><hr>
                    <br>
                    
        
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>