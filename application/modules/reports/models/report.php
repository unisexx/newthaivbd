<?php
class Report extends ORM {

    var $table = 'reports';
    
    var $has_one = array('user');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>