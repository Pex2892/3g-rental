<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends TemplateFrontEnd {
	public function __construct() {
		parent::__construct();
	}

	public function loadTemplate1($title) {
		$this->header($title);
		$this->body1();
	}

	public function loadTemplate2() {
		$this->footer();
	}

	public function index() {
		$this->home();
	}
	
	public function home() {
		$this->loadTemplate1("Home");

		$this->load->model('model_db');

		$data['prd'] = $this->model_db->get_prd_home();

		$this->load->view('home', $data);

		$this->loadTemplate2();
	}

	public function new_products() {
		$this->loadTemplate1("Nuovi Prodotti");

		$this->load->model('model_db');

		$data['prd'] = $this->model_db->get_new_prd_week();

		$this->load->view('new_products', $data);
		$this->loadTemplate2();
	}
	

	public function search_key() {
		redirect(base_url().'search/1/'.$this->input->post('keyword'));
	}

	public function search() {
		$this->loadTemplate1("Hai cercato: ".$this->uri->segment(3));

		$this->load->model('model_db');

		$data['prd'] = $this->model_db->get_prd_search();

		$this->load->view('search', $data);
		$this->loadTemplate2();
	}



	public function staff() {
		$this->loadTemplate1("Staff");
		$this->load->view('staff');
		$this->loadTemplate2();
	}

	public function new_prd() {
		$this->load->view('new_prd');
	}

	public function insert_prd() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('num_serie', 'Numero di serie', 'trim|required|xss_clean|max_length[31]');
		$this->form_validation->set_rules('nome', 'Nome', 'required|xss_clean');
		$this->form_validation->set_rules('categoria', 'Categoria', 'trim|required');
		$this->form_validation->set_rules('marca', 'Marca', 'trim|required|xss_clean');
		$this->form_validation->set_rules('prezzo', 'Prezzo', 'trim|required|xss_clean');
		$this->form_validation->set_rules('prezzo_vend', 'Prezzo di vendita', 'trim|required|xss_clean');

		if($this->form_validation->run()) {
				//Preview upload
				$config =  array(
					'upload_path' => './assets/up_img/product/',
					'allowed_types' => 'gif|jpg|png',
					'encrypt_name' => TRUE
				);

				$this->load->library('upload', $config, 'previewupload'); // Create custom object for cover upload

			if($this->previewupload->do_upload('fileimg')) {
				$this->load->model('model_db');

				if($this->model_db->insert_prd()) {
					echo "Caricato";
				} else {
					echo "Non Caricato";
				}
			}
		} else {
			echo validation_errors();
		}
	}
}
