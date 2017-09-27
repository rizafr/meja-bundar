<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index() {
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			$this->session->set_flashdata("k", "<div id=\"alert\" class=\"alert alert-error\">Maaf Anda belum login. Silakan login terlebih dahulu</div>");
			redirect("logins/login");
		}
		$a['data']		= $this->db->query("SELECT * FROM portfolios order by createdTime DESC")->result();
		$a['page']		= "portfolio/index";
		$this->load->view('admin/index', $a);
	}

	public function add() {
		$a['page']		= "portfolio/_form";
		$this->load->view('admin/index', $a);
	}

	public function save_add() {
		//ambil variabel Postingan
		$title				= addslashes($this->input->post('title'));
		$subTitle			= addslashes($this->input->post('subTitle'));
		$overview			= $this->input->post('overview');
		$publishedTime			= addslashes($this->input->post('publishedTime'));
		$role			= addslashes($this->input->post('role'));
		$linkUrl			= addslashes($this->input->post('linkUrl'));
		$youtubeUrlID			= addslashes($this->input->post('youtubeUrlID'));
		$clientName			= addslashes($this->input->post('clientName'));
		$createdTime			= date('Y-m-d H:i:s');
		$updatedTime			= date('Y-m-d H:i:s');
		$createdBy			= 'admin';

		$data = [
			'title' => $title,
			'subTitle' => $subTitle,
			'overview' => $overview,
			'publishedTime' => $publishedTime,
			'role' => $role,
			'linkUrl' => $linkUrl,
			'youtubeUrlId' => $youtubeUrlID,
			'clientName' => $clientName,
			'createdTime' => $createdTime,
			'updatedTime' => $updatedTime,
			'createdBy' => $createdBy,
		];
		$this->db->insert('portfolios', $data); 
		$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id_surat_masuk=\"alert\">Data berhasil ditambahkan.</div>");
		redirect('admin/portfolio');
	}

	public function edit($id) {
		$where = array('id' => $id);
		$a['datpil'] = $this->db->get_where('portfolios',$where)->row();
		$a['page']		= "portfolio/_form";
		$a['id']		= $id;
		$this->load->view('admin/index', $a);
	}

	public function save_edit() {
		//ambil variabel Postingan
		$id					= addslashes($this->input->post('id'));
		$title				= addslashes($this->input->post('title'));
		$subTitle			= addslashes($this->input->post('subTitle'));
		$overview			= $this->input->post('overview');
		$publishedTime		= addslashes($this->input->post('publishedTime'));
		$role			= addslashes($this->input->post('role'));
		$linkUrl			= addslashes($this->input->post('linkUrl'));
		$youtubeUrlId			= addslashes($this->input->post('youtubeUrlId'));
		$clientName			= addslashes($this->input->post('clientName'));
		$updatedTime			= date('Y-m-d H:i:s');
		$updatedBy			= 'admin';

		$data = [
			'id' => $id,
			'title' => $title,
			'subTitle' => $subTitle,
			'overview' => $overview,
			'publishedTime' => $publishedTime,
			'role' => $role,
			'linkUrl' => $linkUrl,
			'youtubeUrlId' => $youtubeUrlId,
			'clientName' => $clientName,
			'updatedTime' => $updatedTime,
			'updatedBy' => $updatedBy,
		];
		$this->db->where('id',$id);
		$this->db->update('portfolios', $data);
		$this->session->set_flashdata("k", "<div class=\"alert alert-success alert\">Data berhasil diubah.</div>");
		redirect('admin/portfolio');
	}

	public function delete($id) {
		$this->db->where('id',$id);
		$this->db->delete('portfolios');
		$this->session->set_flashdata("k", "<div class=\"alert alert-success alert\">Data berhasil dihapus.</div>");
		redirect('admin/portfolio');
	}

	public function getImages($id) {
		$uploadpath = base_url().'portfolio-images/';
		$rs = $this->db->get('portfolioItems');
		foreach ($rs->result() as $row) {
			$src= $uploadpath.$row->path;
			$alt = $row->pictureUrl;
			$lid = $row->id.'g';
			echo "<li class='thumbnail' id='$lid'>
			<span id='$row->id' class='btn btn-info btn-block btn-delete'><i class='glyphicon glyphicon-remove'></i>&nbsp;&nbsp;&nbsp;Delete</span>
			<img src='$src' alt='$alt' style='height: 150px; width: 150px'>
			<span class='btn btn-warning btn-block'>$alt</span></li>";
		}
	}
}
