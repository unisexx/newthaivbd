<?php
class History_file extends ORM {

    var $table = 'history_files';
    
    var $has_one = array('history');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>