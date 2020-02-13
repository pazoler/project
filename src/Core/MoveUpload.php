<?php
namespace Tabletop\Games\Core;

use Tabletop\Games\Core\Request;

class MoveUpload {
	public static function uploadImage ($file) {
		
		$file_name = $file['picture']['name']; 

		$ext = pathinfo($file_name, PATHINFO_EXTENSION);


		$name = md5($file_name);

		$full_name = $name . '.' . $ext;
		$path = "static/img/" . $full_name;


		$tmp_name = $file['picture']['tmp_name'];
	if (move_uploaded_file($tmp_name, $path)){
	return $full_name;
	} else {
	return false;

}
	
}
}