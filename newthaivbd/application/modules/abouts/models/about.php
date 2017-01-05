<?php
class About extends ORM
{
	public $table = 'abouts';
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
	
}
?>