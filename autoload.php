<?php
if(isset($_GET['page'])){
	require_once './database/DB.php';
	require_once './controllers/' . $_GET['page'] . '.php';
	// require_once './models/' . $_GET['page'] . '99.php';
	new $_GET['page'];
}