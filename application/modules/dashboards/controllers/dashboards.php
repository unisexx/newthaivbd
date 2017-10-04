<?php
class Dashboards extends Public_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('analytics');
	}

	function ajax_load()
	{
		$ga = new Analytics();
		echo '<div id="stat">
            <span id="today"></span> วันนี้ '.number_format($ga->getToday()).' คน &nbsp;
            <span id="month"></span> เดือนนี้ '.number_format($ga->getMonth()).' คน &nbsp;
            <span id="all"></span> ทั้งหมด '.number_format($ga->getTotal()).' คน
        </div>';
	}

	function inc_side()
	{
		$this->load->view("inc_side");
	}
	
	public function inc_home()
	{
		$ga = new analytics();

		// summary
		$data['today'] = $ga->getToday();
		$data['month'] = $ga->getMonth();
		$data['total'] = $ga->getTotal();

		$this->load->view("index2", $data);
	}

}
