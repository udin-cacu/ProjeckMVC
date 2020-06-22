<?php
	//include class controller
	include "controller/controllerMhs.php";
	
	//variabel main merupakan objek baru yang dibuat dari class controller
	$main = new controllerMhs();
	$main->index();
	
?>