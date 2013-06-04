<?php
class Demo extends Admin_Controller
{
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        $this->template->build('admin/index');
    }
    
    function typography(){
        $this->template->build('admin/typography');
    }
    
    function elements(){
        $this->template->build('admin/elements');
    }
    
    function buttons(){
        $this->template->build('admin/buttons');
    }
    
    function treeview(){
        $this->template->build('admin/treeview');
    }
    
    function tables(){
        $this->template->build('admin/tables');
    }
    
    function form_elements(){
        $this->template->build('admin/form-elements');
    }
    
    function form_wizard(){
        $this->template->build('admin/form-wizard');
    }
    
    function wysiwyg(){
        $this->template->build('admin/wysiwyg');
    }
    
    function widgets(){
        $this->template->build('admin/widgets');
    }
    
    function calendar(){
        $this->template->build('admin/calendar');
    }
    
    function gallery(){
        $this->template->build('admin/gallery');
    }
    
    function grid(){
        $this->template->build('admin/grid');
    }
    
    function pricing(){
        $this->template->build('admin/pricing');
    }

    function invoice(){
        $this->template->build('admin/invoice');
    }

    function login(){
    }
    
    function error_404(){
        $this->template->build('admin/error-404');
    }
    
    function error_500(){
        $this->template->build('admin/error-500');
    }
    
    function blank(){
        $this->template->build('admin/blank');
    }
}
?>