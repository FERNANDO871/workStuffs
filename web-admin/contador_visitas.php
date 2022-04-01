<?php 

	if (isset($_COOKIE['contador'])) {
		setcookie('contador', $_COOKIE['contador']+1, time()+365*24+60+60);
		
	}

 ?>