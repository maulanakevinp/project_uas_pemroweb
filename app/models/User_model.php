<?php 

/**
 * 
 */
class User_model 
{
	private $nama = 'Kevin';
	function __construct()
	{
		# code...
	}

	public function getUser()
	{
		return $this->nama;
	}
}