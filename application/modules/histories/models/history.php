<?php
class History extends ORM {

    var $table = 'histories';
	
	var $has_one = array('user');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>