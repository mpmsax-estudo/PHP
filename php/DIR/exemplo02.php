<?php

$images = scandir("images");

//var_dump($images);
foreach ($images as $img) {
	if(in_array($img, array(".", ".."))) {
		
		$filename = str_replace('\\', '/', "images" . DIRECTOR_SEPARATOR . $img);

		$info = pathinfo($filename);

		var_dump($info);

	}
	
}
?>