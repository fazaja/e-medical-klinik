<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berobat extends CI_Controller {

    function __construct(){
        parent::__construct();
    
        if(empty($this->session->userdata('login'))){
            redirect('Auth');
        }

        $this->load->model('m_user');
        $this->load->model('m_obat');
        $this->load->model('m_dokter');
        $this->load->model('m_pasien');
        $this->load->model('m_berobat');
    }

	public function index()
	{
        $data['title'] = 'Manajemen Data Berobat';

        $data['berobat'] = $this->m_berobat->tampil_data()->result_array();

		$this->load->view('v_header', $data);
        $this->load->view('berobat/v_data', $data);
        $this->load->view('v_footer');
        
	}  

    public function tambah(){
        $data['title'] = 'Tambah Data Berobat';

        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('berobat/v_data_tambah', $data);
        $this->load->view('v_footer');
    }

    public function insert(){
        $tgl    = $this->input->post('tgl_berobat');
        $pasien = $this->input->post('pasien');
        $dokter = $this->input->post('dokter');

        $data = array(
            'tgl_berobat' => $tgl,
            'id_pasien' => $pasien,
            'id_dokter' => $dokter
        );

        $this->m_berobat->insert_data($data);      
        
        redirect('Berobat');
    }

    public function edit($id){
        $data['title'] = 'Edit Data Berobat';

        $where = array('id_berobat' => $id);
        $data['edit'] = $this->m_berobat->edit_data($where)->row_array();

        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('berobat/v_data_edit', $data);
        $this->load->view('v_footer');
    }

    public function update(){
        $id     = $this->input->post('id');
        $tgl    = $this->input->post('tgl_berobat');
        $pasien = $this->input->post('pasien');
        $dokter = $this->input->post('dokter');

        $data = array(
            'tgl_berobat' => $tgl,
            'id_pasien' => $pasien,
            'id_dokter' => $dokter
        );

        $where = array('id_berobat' => $id);
        $this->m_berobat->update_data($data, $where);      
        
        redirect('Berobat');
    }

    public function hapus($id){
        $where = array('id_berobat' => $id);
        $this->m_berobat->hapus_data($where);      
        
        redirect('Berobat');
    }
    
    // fungsi untuk rekam medis
    function rekam($id){
        $data['title'] = "Rekam Medis";

        //tampilkan detail rekam medis
        $data['d'] = $this->m_berobat->tampil_rm($id)->row_array();

        // untuk menampilkan riwayat kunjungan
        $q = $this->db->query("SELECT id_pasien FROM berobat 
                               WHERE id_berobat='$id'")->row_array();
        $id_pasien = $q['id_pasien'];
        $data['riwayat'] = $this->m_berobat->tampil_riwayat($id_pasien)
                           ->result_array();
        
        //menampilkan data obat di combo
        $data['obat'] = $this->m_obat->tampil_data()->result_array();

        //untuk menampilkan resep obat
        $data['resep'] = $this->m_berobat->tampil_resep($id)->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('berobat/v_rekam_medis', $data);
        $this->load->view('v_footer');
    }

    function insert_rm(){
        $id_berobat = $this->input->post('id');
        $keluhan = $this->input->post('keluhan');
        $diagnosa = $this->input->post('diagnosa');
        $penatalaksanaan = $this->input->post('penatalaksanaan');

        $data = array(
            'keluhan_pasien' => $keluhan,
            'hasil_diagnosa' => $diagnosa,
            'penatalaksanaan' => $penatalaksanaan
        );

        $where = array('id_berobat'=>$id_berobat);

        $this->m_berobat->update_data($data, $where);

        redirect('berobat/rekam/'.$id_berobat);
    }

    function insert_resep(){
        $id_berobat = $this->input->post('id');
        $obat = $this->input->post('obat');

        $data = array(
            'id_berobat' => $id_berobat,
            'id_obat' => $obat
        );

        $this->m_berobat->insert_resep($data);

        redirect('berobat/rekam/'.$id_berobat);
    }

    function hapus_resep($id, $id_berobat){
        $where = array('id_resep'=>$id);
        $this->m_berobat->hapus_resep($where);
        redirect('berobat/rekam/'.$id_berobat);
    }

}
