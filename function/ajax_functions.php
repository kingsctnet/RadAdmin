<?php
include "config_functions.php";
include "db.php";
include "functions.php";

$action = $_POST['action'];

if($action == 'delUser'){
	$username = $_POST['id'];
	$res = hapus_user($username);
	if($res){
		echo "0";
	}else{
		echo "1";
	}
}else if($action == 'delGroup'){
	$group = $_POST['id'];
	$res = hapus_group($group);
	if($res){
		echo "0";
	}else{
		echo "1";
	}
}else{
	echo "1";
}
?>
