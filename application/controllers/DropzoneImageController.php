<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DropzoneImageController extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','file'));
	}

	const BASE_URL = 'portfolio-images/';

	/**
	 * Index Page for this controller.
	 */
	public function index() {
		$this->load->view('portfolio/upload');
	}

	//Untuk proses upload foto
	function proses_upload() {
        $config['upload_path']   = self::BASE_URL;
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if ($this->upload->do_upload('userfile')) {
        	$token = $this->input->post('token_foto');
        	$portfolioId = $this->input->post('portfolioId');

        	$upload_data = $this->upload->data(); 
        	$file_name = $upload_data['file_name'];

        	$this->db->insert('portfolioItems', [
        		'pictureUrl' => self::BASE_URL . $file_name,
        		'title' => $file_name,
        		'portfolioId' => $portfolioId,
        		'token' => $token,
        		'createdTime' => date('Y-m-d H:i:s')
        	]);
        }
        $this->load->view('admin/portfolio/upload', $portfolioId);
	}

	//Untuk menghapus foto
	function remove_foto() {
		//Ambil token foto
		$token = $this->input->post('token');
		$foto = $this->db->get_where('portfolioItems',array('token'=>$token));
		if ($foto->num_rows()>0) {
			$hasil = $foto->row();
			$nama_foto = $hasil->pictureUrl;
			if (file_exists($file= $nama_foto)) {
				unlink($file);
			}
			$this->db->delete('portfolioItems',array('token'=>$token));
			echo json_encode(array('token' => $token, "status" => 'Gambar akan dihapus?')); 
		} else {
			echo json_encode(array('token' => $token, "status" => 'Gambar gagal dihapus')); 
		}
	}
}