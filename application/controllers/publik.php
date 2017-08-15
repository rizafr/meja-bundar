<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publik extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('web_model');
	}
	
	public function index() {
		$instansi = $this->web_model->getDataByID('tr_instansi', 'id_instansi', '1');
		$this->load->view('publik/home', ['instansi' => $instansi]);
	}

	public function portofolio($id = 1) {
		$instansi = $this->web_model->getDataByID('tr_instansi', 'id_instansi', '1');
		$portofolio = $this->web_model->getDataByID('portfolios', 'id', $id);
		$this->load->view('publik/portofolio', [
			'instansi' => $instansi,
			'portofolio' => $portofolio
		]);
	}
}
