<?php
class Doc extends ORM {

    var $table = 'docs';
    
    var $has_one = array('user');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>