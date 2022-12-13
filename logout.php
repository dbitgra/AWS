<?php

	/**
	 * Daniel Bittan Graells
	 * Logout
	 */

	session_start() ;

	$_SESSION = [] ;

	session_destroy() ;

	header("location: login.php") ;