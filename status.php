<?php

/*
 *  STATUS.PHP
 *
 *  The page shows your "most popular" status messages
 *  It grabs the last 100 status messages and sorts them
 *  based on a score calculated using the following formula
 *  {comment_count} * 1.5 + {like_count}
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
				Your most popular statuses
				<small>as determined mostly arbitrarily</small>
			</h1>
		</div>
	</div>
</body>
</html>
