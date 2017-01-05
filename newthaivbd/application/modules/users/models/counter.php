<?php
class Counter extends ORM
{
	public $table = 'counters';
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}	
}

?>