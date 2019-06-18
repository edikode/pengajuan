<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        cek_login();
    }
    
    public function index()
    {
        $data['pengajuan'] = $this->db->get_where('pengajuan',['guru_id' => $this->session->userdata('id')])->row();
        
        $data['_view']= "guru/status";
        $this->load->view('template/index', $data);
    }
    
}