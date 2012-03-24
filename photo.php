<?php

/*
 *  PHOTO.PHP
 *
 *  The page shows the average number of likes of photos you are tagged in
 *  It uses fql to do so.
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
	<div class="container" style="margin-top: 20px"></div>
</body>
</html>
