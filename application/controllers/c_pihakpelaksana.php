<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Pihakpelaksana extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('level'))
		{
			redirect('login');
		}
	}

	public function index()
	{
		$data['total_data_alternatif'] = $this->model_data->get_count('data_alternatif');
		$data['total_data_kriteria'] = $this->model_data->get_count('data_kriteria');
		$data['total_data_subkriteria'] = $this->model_data->get_count('data_subkriteria');
		
		$this->load->view('pihakpelaksana/v_sidebar_pihakpelaksana');
		$this->load->view('pihakpelaksana/v_navbar_pihakpelaksana');
		
		$this->load->view('pihakpelaksana/v_dashboard_pihakpelaksana',$data);
		
	}
	
	
	//data lapangan
	public function data_survey_lapangan()
	{
		
		$data['data_survey_lapangan'] = $this->model_data->data('id_alternatif','data_survey_lapangan');

		// print($data['data_longlist'][0]['kode_longlist']);die();
		$this->load->view('pihakpelaksana/v_sidebar_pihakpelaksana');
		$this->load->view('pihakpelaksana/v_navbar_pihakpelaksana');
		
		$this->load->view('pihakpelaksana/v_data_survei_longlist' ,$data);

	}

	public function tampil_tambah_data_lapangan()
	{
		$this->load->view('pihakpelaksana/v_sidebar_pihakpelaksana');
		$this->load->view('pihakpelaksana/v_navbar_pihakpelaksana');
		
		$this->load->view('v_tambah_data_survei_longlist' );		
	}

	// public function tambah_data_lapangan()
	// {
	// 	$kode_longlist = $this->input->post('kode_longlist');
	// 	$nik_longlist = $this->input->post('nik_longlist');
	// 	$nama_alternatif = $this->input->post('nama_alternatif');
	// 	$nama_dusun = $this->input->post('nama_dusun');
	// 	$rt = $this->input->post('rt');
	// 	$rw = $this->input->post('rw');

	// 	$data_insert = array(
    //         'kode_longlist'  => $kode_longlist,
    //         'nik_longlist'  => $nik_longlist,
    //         'nama_alternatif'     => $nama_alternatif,
    //         'nama_dusun' => $nama_dusun,
    //         'rt'     => $rt,
    //         'rw' => $rw
    //     );

        
    //     $this->model_data->insert($data_insert,'data_longlist');

	// 	redirect('c_admin/data_longlist');		
	// }

	public function hapus_data_lapangan()
	{
		$id_surveylapangan = $this->input->get('id_surveylapangan');
		$where = array(            
            'id_surveylapangan' =>  $id_surveylapangan
        );

		// print($id_longlist);die();
        $this->model_data->delete_data($where,'data_survey_lapangan');
     	// redirect('c_admin/data_longlist');		   
	}

	public function tampil_edit_data_lapangan()
	{
		$id_surveylapangan = $this->input->get('id_surveylapangan');
		$where = array(            
            'id_surveylapangan' =>  $id_surveylapangan
        );

        $data['data_survey_lapangan'] = $this->model_data->pilih_data($where ,'data_survey_lapangan');


        $this->load->view('pihakpelaksana/v_sidebar_pihakpelaksana');
		$this->load->view('pihakpelaksana/v_navbar_pihakpelaksana');
		
		$this->load->view('v_edit_data_longlist' ,$data);

	}

	// public function edit_data_lapangan()
	// {
	// 	$id_longlist = $this->input->get('id_longlist');
	// 	$kode_longlist = $this->input->post('kode_longlist');
	// 	$nik_longlist = $this->input->post('nik_longlist');
	// 	$nama_alternatif = $this->input->post('nama_alternatif');
	// 	$nama_dusun = $this->input->post('nama_dusun');
	// 	$rt = $this->input->post('rt');
	// 	$rw = $this->input->post('rw');


    //     $where = array(
    //         'id_longlist' => $id_longlist
    //     );

    //     $data = array(
    //         'kode_longlist' => $kode_longlist,
    //         'nik_longlist' => $nik_longlist,
    //         'nama_alternatif' => $nama_alternatif,
    //         'nama_dusun' => $nama_dusun,
    //         'rt' => $rt,
    //         'rw' => $rw
    //     );
    //     $this->model_data->edit_data($where,$data,'data_longlist');
        
    //     redirect('c_admin/data_longlist');		
	// }



	//alternatif/ longlist
	public function data_alternatif()
	{
		$data['data_alternatif'] = $this->model_data->data('nama_dusun','data_alternatif');
		// print($data['data_longlist'][0]['kode_longlist']);die();
		$this->load->view('pihakpelaksana/v_sidebar_pihakpelaksana');
		$this->load->view('pihakpelaksana/v_navbar_pihakpelaksana');
		
		$this->load->view('pihakpelaksana/v_data_alternatif_pihakpelaksana' ,$data);

	}

	//kriteria
	public function data_kriteria()
	{
		$data['data_kriteria'] = $this->model_data->data('kode_kriteria','data_kriteria');
		// print($data['data_longlist'][0]['kode_longlist']);die();
		$this->load->view('pihakpelaksana/v_sidebar_pihakpelaksana');
		$this->load->view('pihakpelaksana/v_navbar_pihakpelaksana');
		
		$this->load->view('pihakpelaksana/v_data_kriteria_pihakpelaksana' ,$data);

	}

	//SUB KRITERIA
	public function sub_data_kriteria()
	{
		$data['sub_data_kriteria'] = $this->model_data->data_subkriteria('data_subkriteria');
		// print($data['data_longlist'][0]['kode_longlist']);die();
		$this->load->view('pihakpelaksana/v_sidebar_pihakpelaksana');
		$this->load->view('pihakpelaksana/v_navbar_pihakpelaksana');
		
		$this->load->view('pihakpelaksana/v_data_subkriteria_pihakpelaksana' ,$data);

	}

	//INFO DATA DIRI
	public function data_info(){
		$username = $this->session->userdata('username');
		$where = array(            
            'username' =>  $username
        );

		$data['data_info'] = $this->model_data->tampil_data_login($where);

		$this->load->view('pihakpelaksana/v_sidebar_pihakpelaksana');
		$this->load->view('pihakpelaksana/v_navbar_pihakpelaksana');
		$this->load->view('pihakpelaksana/v_tampil_data_info_pihakpelaksana', $data);
	}

	public function tambah_data_info()
	{
		$this->form_validation->set_rules('no_telepon', 'No. telepon', 'is_unique[data_login.no_telepon]|required');
		if($this->form_validation->run() == false )
		{
			$this->session->set_flashdata('no_telepon', form_error('no_telepon'));
			redirect('c_pihakpelaksana/data_info');	
		}
		else
		{
			$nama = $this->input->post('nama',true);
			$divisi = $this->input->post('divisi',true);
			$no_telepon = $this->input->post('no_telepon',true);
			// $id_login = $this->input->get('id_login');
			$username = $this->input->get('username',true);

			$where_datalogin = array(
				'username' => $username
			);
			
			$data_insert = array(
				'username'=> $username,
				'nama'  => $nama,
				'divisi'  => $divisi,
				'no_telepon'     => $no_telepon  
			);
			$this->model_data->edit_data($where_datalogin,$data_insert,'data_login');

			redirect('c_pihakpelaksana/data_info');		
		}
			
	}

}
?>