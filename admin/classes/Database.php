<?php

class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "", "dbflawers");
		return $this->con;
	}
}

?>