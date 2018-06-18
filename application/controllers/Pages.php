<?php

/**
 * Created by PhpStorm.
 * User: Avtuchovich Andrey
 * Date: 09.06.18
 * Time: 21:45
 */
class Pages extends CI_Controller {
	public function view($page = "index") {
		if (!file_exists(APPPATH . '/views/' . $page . '.php')) {
			// Упс, у нас нет такой страницы!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->library('ion_auth');
		$data['logged'] = $this->ion_auth->logged_in();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('/' . $page, $data);
		$this->load->view('templates/footer', $data);
	}
}