<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    function __construct(){
        parent::__construct();
    
        if(empty($this->session->userdata('login'))){
            redirect('Auth');
        }

        $this->load->model('m_user');
    }

	public function index()
	{
		redirect('Dashboard');
        
	}

    public function data_user(){
        $data['title'] = 'Laporan Data User';

        $data['user'] = $this->m_user->tampil_data()->result_array();

        $this->load->view('laporan/v_lap_user', $data);

    }

}
