<?php
class TemplateFrontEnd extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function header($title) {
		$data['headerTitle'] = $title;
		$this->load->view('tpl/FrontEnd_header', $data);
	}
	
	public function body1() {
		$this->load->view('tpl/FrontEnd_body');
	}

	public function footer() {
		$data['page'] = $this->uri->segment(1);
		$this->load->view('tpl/FrontEnd_footer', $data);
	}
}