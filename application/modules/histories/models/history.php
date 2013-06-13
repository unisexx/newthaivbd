<?php
class History extends ORM {

    var $table = 'histories';
	
	var $has_one = array('user');
    
    var $has_many = array('history_file');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>