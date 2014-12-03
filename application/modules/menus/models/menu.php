<?php
class Menu extends ORM {

    var $table = 'menus';

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>