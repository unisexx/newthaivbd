<?php
class Vdo extends ORM {

    var $table = 'vdos';
	
	var $has_one = array('category');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>