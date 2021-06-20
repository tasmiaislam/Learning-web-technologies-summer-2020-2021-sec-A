<?php
	
	$name = "";
	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['name'];
		if($name == ""){
			echo "invalid!";
		}
       
        else{
            echo $name;
        }
	}else{
		echo 'Invalid input';
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
			<legend><h3>NAME</h3></legend>

	 <input type="text" name="name" value="<?php echo $name; ?>" /><br><br>
	 <hr>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>