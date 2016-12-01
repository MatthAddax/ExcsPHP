<?php
	$x = 76;
	function inc(&$x){
		$x += 1;
	}
	function dec(&$x){
		$x -= 1;
	}
	inc($x);
	dec($x);
	inc($x);
	var_dump($x);
?>