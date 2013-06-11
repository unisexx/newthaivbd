<?php
class Research extends ORM {

    var $table = 'researchs';
	
	var $has_one = array("category");

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>