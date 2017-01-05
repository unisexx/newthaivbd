<?php
class Project extends ORM {

    var $table = 'projects';
    
    var $has_one = array('user');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>