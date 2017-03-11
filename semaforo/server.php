<?php  
	
	if($_POST){
	$color= $_POST['color'];

	file_put_contents("estado.txt",$color);
	}else{
		$color = file_get_contents("estado.txt");
		echo $color;
	}
?>
