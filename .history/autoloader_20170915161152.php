<?php

spl_autoload_register(function ($className) {
	$filename = str_replace(array('NfseRPS\\','\\',DIRECTORY_SEPARATOR), DIRECTORY_SEPARATOR, $className) . '.php';
	$path = __DIR__ . DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR . $filename;
	if (file_exists($path)) {
		include $path;
		return true;
	}else
	{
	return false;
	}
});
?>

