<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    const BASE_URL = 'upload/';

    public function index() {
        if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
            $this->session->set_flashdata("k", "<div id=\"alert\" class=\"alert alert-error\">Maaf Anda belum login. Silakan login terlebih dahulu</div>");
            redirect("logins/login");
        }
        $a['data']      = $this->db->query("SELECT * FROM clients order by createdTime DESC")->result();
        $a['page']      = "client/index";
        $this->load->view('admin/index', $a);
    }

    public function add() {
        $a['page']      = "client/_form";
        $this->load->view('admin/index', $a);
    }

    public function save_add() {
        //ambil variabel Postingan
        $name              = addslashes($this->input->post('name'));
        $pictureColorUrl         = null;
        $pictureBwUrl           = null;
        $createdTime            = date('Y-m-d H:i:s');
        $updatedTime            = date('Y-m-d H:i:s');
        $createdBy          = 'admin';

        $config['upload_path']   = self::BASE_URL;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('pictureColorUrl')) {
            $imgPictureColorUrl     = $this->upload->data();
            $pictureColorUrl        = self::BASE_URL . $imgPictureColorUrl['file_name'];
        }
        if ($this->upload->do_upload('pictureBwUrl')) {
            $imgPictureBwUrl     = $this->upload->data();
            $pictureBwUrl        = self::BASE_URL . $imgPictureBwUrl['file_name'];
        }
        $data = [
            'name' => $name,
            'pictureColorUrl' => $pictureColorUrl,
            'pictureBwUrl' => $pictureBwUrl,
            'createdTime' => $createdTime,
            'updatedTime' => $updatedTime,
            'createdBy' => $createdBy,
        ];
        $this->db->insert('clients', $data); 
        $this->session->set_flashdata("k", "<div class=\"alert alert-success\" id_surat_masuk=\"alert\">Data berhasil ditambahkan.</div>");
        redirect('admin/client');
    }

    public function edit($id) {
        $where = array('id' => $id);
        $a['datpil'] = $this->db->get_where('clients',$where)->row();
        $a['page']      = "client/_form";
        $a['id']        = $id;
        $this->load->view('admin/index', $a);
    }

    public function save_edit() {
        //ambil variabel Postingan
        $id                = addslashes($this->input->post('id'));
        $name              = addslashes($this->input->post('name'));
        $pictureColorUrl   = $this->input->post('pictureColorUrlHidden');
        $pictureBwUrl      = $this->input->post('pictureBwUrlHidden');
        $updatedTime       = date('Y-m-d H:i:s');
        $updatedBy         = 'admin';

        $config['upload_path']   = self::BASE_URL;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;

        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload('pictureColorUrl')) //important!
        {
           $error = $this->upload->display_errors();
        }

        if ( ! $this->upload->do_upload('pictureBwUrl')) //important!
        {
           $error = $this->upload->display_errors();
        }

        if ($this->upload->do_upload('pictureColorUrl')) {
            $imgPictureColorUrl     = $this->upload->data();
            $pictureColorUrl        = self::BASE_URL . $imgPictureColorUrl['file_name'];
        }
        if ($this->upload->do_upload('pictureBwUrl')) {
            $imgPictureBwUrl     = $this->upload->data();
            $pictureBwUrl        = self::BASE_URL . $imgPictureBwUrl['file_name'];
        }

        $data = [
            'id' => $id,
            'name' => $name,
            'pictureColorUrl' => $pictureColorUrl,
            'pictureBwUrl' => $pictureBwUrl,
            'updatedTime' => $updatedTime,
            'updatedBy' => $updatedBy,
        ];
        $this->db->where('id',$id);
        $this->db->update('clients', $data);
        $this->session->set_flashdata("k", "<div class=\"alert alert-success alert\">Data berhasil diubah.</div>");
        redirect('admin/client');
    }

    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('clients');
        $this->session->set_flashdata("k", "<div class=\"alert alert-success alert\">Data berhasil dihapus.</div>");
        redirect('admin/client');
    }
}
