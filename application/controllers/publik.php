<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publik extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('web_model');
	}
	
	public function index() {
		$instansi = $this->web_model->getDataByID('tr_instansi', 'id_instansi', '1');
		$portfolios = $this->web_model->getAll('portfolios');
		$this->load->view('publik/index', [
			'instansi' => $instansi,
			'portfolios' => $portfolios
		]);
	}

	public function home() {
		$instansi = $this->web_model->getDataByID('tr_instansi', 'id_instansi', '1');
		$portfolios = $this->web_model->getAll('portfolios');
		$this->load->view('publik/home', [
			'instansi' => $instansi,
			'portfolios' => $portfolios
		]);
	}

	public function portofolio($id) {
		$instansi = $this->web_model->getDataByID('tr_instansi', 'id_instansi', '1');
		$portofolio = $this->web_model->getDataByID('portfolios', 'id', $id);
		$this->load->view('publik/portofolio', [
			'instansi' => $instansi,
			'portofolio' => $portofolio
		]);
	}
}
