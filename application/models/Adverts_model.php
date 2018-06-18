<?php

class Adverts_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getAdvert($id = null) {
		if ($id === NULL) {
			$query = $this->db->get('cars');
			return $query->result_array();
		}

		$query = $this->db->get_where('cars', array('id' => $id));
		return $query->row_array();
	}

	public function setAdverts($img) {
		$this->load->helper('url');
		$data = array(
			'model' => $this->input->post('model'),
			'description' => $this->input->post('description'),
			'color' => $this->input->post('color'),
			'price' => $this->input->post('price'),
			'image' => '/uploads/'.$img['upload_data']['file_name'],
			'contact' => $this->input->post('contact'),
			'location' => $this->input->post('location')
		);

		return $this->db->insert('cars', $data);
	}
}