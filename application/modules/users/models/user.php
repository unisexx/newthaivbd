<?php
class User extends ORM
{
	public $table = "users";
	
	public $has_one = array("level","user_type");
	
	public $has_many = array("content","project");
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>