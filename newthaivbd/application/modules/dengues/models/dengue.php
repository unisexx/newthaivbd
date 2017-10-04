<?php
class Dengue extends ORM {

    var $table = 'dengues';
	
	var $has_one = array('user');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>