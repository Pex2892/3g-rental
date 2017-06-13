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

	public function category() {
		$this->loadTemplate1("Categoria");

		$this->load->model('model_db');

		$data['prd'] = $this->model_db->get_prd_cat();

		$this->load->view('category', $data);

		$this->loadTemplate2();
	}

	public function login() {
		$this->loadTemplate1("Login");

		$this->load->view('login');

		$this->loadTemplate2();
	}

	public function about() {
		$this->loadTemplate1("Chi siamo");

		$this->load->view('about');

		$this->loadTemplate2();
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function login_validation() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');
		$this->form_validation->set_rules('psw', 'Password', 'required|md5|trim');

		if($this->form_validation->run()) {
			$data = array(
				'email' => $this->input->post('email'),
				'is_logged_in' => 1
			);

			$this->session->set_userdata($data);
			redirect('home');
		} else {
			echo validation_errors();
		}
	}

	public function validate_credentials() {
		$this->load->model('model_db');

		if($this->model_db->can_login()) {
			$this->form_validation->set_message("validate_credentials", "Incorrect Email/Password!");
			return  false;
		}
		return true;
	}

	public function register() {
		$this->loadTemplate1("Register");

		$this->load->view('register');

		$this->loadTemplate2();
	}

	public function register_validation() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fullname', 'FullName', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[utente.email]');
		$this->form_validation->set_rules('psw', 'Password', 'required|trim|min_length[4]');
		$this->form_validation->set_rules('repsw', 'Ripeti Password', 'required|trim|matches[psw]');

		$this->form_validation->set_message('is_unique', 'Questa email è già in uso!');
		
		if($this->form_validation->run()) {

			$this->load->model('model_db');
			if($this->model_db->add_user()) {
				//faccio loggare l'utente
				$data = array(
					'email' => $this->input->post('email'),
					'is_logged_in' => 1
				);

				$this->session->set_userdata($data);
				redirect('home');
			} else {
				echo "Errore durante la registrazione!";
			}

		} else {
			echo validation_errors();
		}
	}

	public function product() {
		$this->load->model('model_db');

		$data['prd'] = $this->model_db->get_prd();

		//query per i dettagli
		$data['prd_dtl'] = $this->model_db->get_prd_dtl($data['prd'][0]->ID);

		//query per i prodotti della stessa categoria
		$data['prd_corr'] = $this->model_db->get_prd_corr($data['prd'][0]->ID, $data['prd'][0]->ID_CATEGORIA);

		//query per aggiungere le views+1
		$this->model_db->set_prd_view($data['prd'][0]->ID);

		$this->loadTemplate1($data['prd'][0]->nome);
		$this->load->view('product', $data);
		$this->loadTemplate2();
	}

	public function new_products() {
		$this->loadTemplate1("Nuovi Arrivi");

		$this->load->model('model_db');

		$data['prd'] = $this->model_db->get_new_prd_week();

		$this->load->view('new_products', $data);
		$this->loadTemplate2();
	}
	
	public function search_key() {
		if($this->input->post('cat') == NULL) $cat = 'all'; else $cat = $this->input->post('cat');
		if($this->input->post('price') == NULL) $price = '0,1000'; else $price = $this->input->post('price');
		if($this->input->post('price_ven') == NULL) $price_ven = '0,1000'; else $price_ven = $this->input->post('price_ven');
		redirect(base_url().'search/1/'.$this->input->post('keyword').'/'.$cat.'/'.$price.'/'.$price_ven);
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

	public function check_prd() {
		$this->load->model('model_db');

		if($this->model_db->check_prd_available())
			echo json_encode(array('status' => 'ok', 'info' => 'Il prodotto è disponibile per la data selezionata'));
		else 
			echo json_encode(array('status' => 'error', 'info' => 'Il prodotto non è disponibile'));	
	}

	public function send_mail_info_prd() {
		//errore dentro azure

		//invio per info prd
        $this->load->library('email');

        $this->email->from($this->input->post('mail'), 'Your Name'); 
        $this->email->to('info@mail.it');
        $this->email->subject('Email Test'); 
        $this->email->message('Testing the email class.'); 
        
        if($this->email->send())
        	echo json_encode(array('status' => 'ok', 'info' => 'L\'email è stata inviata. Entro 48 ore ricevarai una risposta!'));
		else 
			echo json_encode(array('status' => 'error', 'info' => 'Errore durante l\'invio '));	
	}

	public function transition_1() {
		//pagina riepilogo prodotto
		$this->loadTemplate1("Step 2 - Riepilogo");

		$this->load->model('model_db');

		//$data['prd'] = $this->model_db->get_prd_home();

		$this->load->view('transition1', null);

		$this->loadTemplate2();
	}

	public function transition_2() {
		//pagina per il noleggio/acquisto
		$this->loadTemplate1("Step 3 - Pagamento");

		$this->load->model('model_db');

		//$data['prd'] = $this->model_db->get_prd_home();

		$this->load->view('transition2', null);

		$this->loadTemplate2();
	}

	public function transition_3() {
		//pagina riepilogo di completamento

		//aggiungere query nella tabella noleggio 

		//noleggio: ID, ID_PRODOTTO, ID_UTENTE, data_inizio, data_fine, prezzo_tot, caparra, descrizione, data_prenotazione(timestamp)

		$this->loadTemplate1("Step 4 - Completato");

		$this->load->model('model_db');

		//$data['prd'] = $this->model_db->get_prd_home();

		$this->load->view('transition3', null);

		$this->loadTemplate2();
	}


}
