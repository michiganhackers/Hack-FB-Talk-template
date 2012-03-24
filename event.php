<?php

/*
 *  EVENT.PHP
 *
 *  This page shows you upcoming events your friends are going to. 
 *  Events are ranked by the number of friends attending.
 *
 */

require_once 'fb/auth.php';

// If there is no logged in user, redirect to login.php
if(!$user)
  header("Location: login.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css" />
</head>
<body>
	<div class="container" style="margin-top: 20px">
		<div class='page-header'>
			<h1>
				Upcoming Events
				<small>Drink Responsibly</small>
				<!-- and with friends! -->
			</h1>
		</div>
	</div>
</body>
</html>
