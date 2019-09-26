<html><body background-color='black'>
<script>
        window.location.href = "index.php";
    </script>
<?php session_start(); ?>
<?php
include_once("conectar.php");

$mesa = $_POST['mesa'];
	if (isset($mesa))  {
		$_SESSION['mesa'] = $mesa;
}

$mesanova = $_POST['mesanova'];
$_SESSION['mesanova'] = $mesanova;

?>