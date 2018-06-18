<?php

class Adverts extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('adverts_model');
		$this->load->library('ion_auth');

	}

	public function view($id = NULL) {
		$data['advert_item'] = $this->adverts_model->getAdvert($id);
		$data['logged'] = $this->ion_auth->logged_in();

		if (empty($data['advert_item'])) {
			show_404();
		}

		$data['title'] = $data['advert_item']['model'];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('adverts/view', $data);
		$this->load->view('templates/footer');
	}

	public function index() {

		$data['adverts'] = $this->adverts_model->getAdvert();
		$data['title'] = 'Объявления автомобилей';
		$data['logged'] = $this->ion_auth->logged_in();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('adverts/index', $data);
		$this->load->view('templates/footer');
	}

	public function create() {
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');

		$data['logged'] = $this->ion_auth->logged_in();

		$this->form_validation->set_rules('model', 'Model', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/nav', $data);
			$this->load->view('adverts/create');
			$this->load->view('templates/footer');

		} else {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = 50000;
			$config['max_width'] = 2000;
			$config['max_height'] = 1100;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('userfile')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
			}

			$this->adverts_model->setAdverts($data);
			redirect('/adverts', 'refresh');
		}
	}
}