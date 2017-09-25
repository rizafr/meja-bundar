<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Publik extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('web_model');
	}

	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index() {
		$instansi = $this->web_model->getDataByID('tr_instansi', 'id_instansi', '1');
		$portfolios = $this->web_model->getAll('portfolios');

		$this->load->view('publik/_header');
		$this->load->view('publik/_menu');
		$this->load->view('publik/index', [
			'instansi' => $instansi,
			'portfolios' => $portfolios
		]);
		$this->load->view('publik/_footer');
	}

	/**
	 * [home description]
	 * @return [type] [description]
	 */
	public function home() {
		$instansi = $this->web_model->getDataByID('tr_instansi', 'id_instansi', '1');
		$portfolios = $this->web_model->getAll('portfolios');
		$this->load->view('publik/home', [
			'instansi' => $instansi,
			'portfolios' => $portfolios
		]);
	}

	/**
	 * [about description]
	 * @return [type] [description]
	 */
	public function about() {
		$instansi = $this->web_model->getDataByID('tr_instansi', 'id_instansi', '1');

		$this->load->view('publik/_header');
		$this->load->view('publik/_menu');
		$this->load->view('publik/about', [
			'instansi' => $instansi,
		]);
		$this->load->view('publik/_footer');
	}

	/**
	 * [contact description]
	 * @return [type] [description]
	 */
	public function contact() {
		$instansi = $this->web_model->getDataByID('tr_instansi', 'id_instansi', '1');

		$this->load->view('publik/_header');
		$this->load->view('publik/_menu');
		$this->load->view('publik/contact', [
			'instansi' => $instansi,
		]);
		$this->load->view('publik/_footer');
	}


	/**
	 * [portfolio description]
	 * @return [type] [description]
	 */
	public function portfolio() {
		$instansi = $this->web_model->getDataByID('tr_instansi', 'id_instansi', '1');
		$portfolios = $this->web_model->getAll('portfolios');

		$this->load->view('publik/_header');
		$this->load->view('publik/_menu');
		$this->load->view('publik/portvisual', [
			'instansi' => $instansi,
			'portfolios' => $portfolios
		]);
		$this->load->view('publik/_footer');
	}

	public function portfolio_detail($id) {
		$instansi = $this->web_model->getDataByID('tr_instansi', 'id_instansi', '1');
		$portofolio = $this->web_model->getDataByID('portfolios', 'id', $id);

		$this->load->view('publik/_header');
		$this->load->view('publik/_menu');
		$this->load->view('publik/portfolio-detail', [
			'instansi' => $instansi,
			'portofolio' => $portofolio
		]);
		$this->load->view('publik/_footer');
	}
}
