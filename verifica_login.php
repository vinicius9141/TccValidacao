<?php
//session_start(); se esta merda nao estiver comentada da pal na porra toda
if(!$_SESSION['usuario']) {
	header('Location: index.php');
	exit();
}
