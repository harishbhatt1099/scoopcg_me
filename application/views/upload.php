<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
	//echo "<pre>";print_r($_FILES);print_r($_REQUEST);die;
	if(move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name'])){
		echo($_POST['index']);
	}
	exit;
}
?>