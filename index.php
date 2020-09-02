<?php
$controller = 'home';
$pathControler = 'core/controller/'.$controller.'.php';
if (file_exists($pathControler)) {
	include $pathControler;	
}
