<?php
    
	$element = [2, 4, 6, 'x', 'y', 'z', 'Apple', 'Mango' ];	
	$search='z';
	$a=0;
	echo "Element to search = $search <br>";
	for($i=0; $i<count($element); $i++){
	 if($element[$i]==$search){
		 $a+=1;
	 }
	 
	}
	if($a==1){
		echo "Element is found <br>";
	}
	else{
		echo "Element is not found";
	
	}
?>