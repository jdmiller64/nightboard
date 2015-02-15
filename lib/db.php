<?php

/* :: Nightboard ::
 * 
 * FILENAME:    lib/db.php
 * AUTHOR(S):   Joey Miller ("Zarpho")
 * DESCRIPTION: Contains data for the Database class.
 */

class Database
{
	public $hostname;
	public $username;
	public $password;
	public $database;
	
	/* Constructor method */
	function __construct($host, $user, $pass, $db)
	{
		$this->hostname = $host;
		$this->username = $user;
		$this->password = $pass;
		$this->database = $db;
	}
}

?>