<?php
if(isset($_GET['modules'])){
	$modules["title"] = "[ Available Modules ]";
	foreach(glob("modules/*.zip") as $module){
		$modules["name"][] = "module:".basename($module,".zip");
	}
	header("HTTP/1.1 200");
	header("Content-Type: application/json");
	echo json_encode(["status"=>200,"body"=>$modules]);
}else if(isset($_GET['packages'])){
	$modules["title"] = "[ Available Packages ]";
	foreach(glob("package/*.pkg") as $module){
		$modules["name"][] = "package:".basename($module,".pkg");
	}
	header("HTTP/1.1 200");
	header("Content-Type: application/json");
	echo json_encode(["status"=>200,"body"=>$modules]);
}