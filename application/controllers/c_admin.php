<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->library('form_validation');
		if(!$this->session->userdata('level'))
		{
			redirect('login');
		}
		// $this->load->model('model_data');
	}

	public function index()
	{
		$data['total_data_kriteria'] = $this->model_data->get_count('data_kriteria');
		$data['total_data_login'] = $this->model_data->get_count('data_login');
		$data['total_data_alternatif'] = $this->model_data->get_count('data_alternatif');

		$this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		
		$this->load->view('admin/v_dashboard',$data);
		
	}
	
	//data alternatif/masyarakat
	public function data_alternatif()
	{
		$data['data_alternatif'] = $this->model_data->data('nama_dusun','data_alternatif');

		// print($data['data_longlist'][0]['kode_longlist']);die();
		$this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_data_alternatif' ,$data);
	}

	public function tampil_tambah_alternatif()
	{
		$this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_tambah_data_alternatif' );		
	}

	public function tambah_data_alternatif()
	{
		$this->form_validation->set_rules('nik_alternatif', 'NIK', 'is_unique[data_alternatif.nik_alternatif]|required');
		if($this->form_validation->run() == false )
		{
			$this->session->set_flashdata('nik_alternatif', form_error('nik_alternatif'));
			redirect('c_admin/tampil_tambah_alternatif');	
		}
		else
		{
			// $kode_longlist = $this->input->post('kode_longlist');
			$nik_alternatif = $this->input->post('nik_alternatif',true);
			$nama_alternatif = $this->input->post('nama_alternatif',true);
			$nama_dusun = $this->input->post('nama_dusun',true);
			$rt = $this->input->post('rt',true);
			$rw = $this->input->post('rw',true);

			$data_insert = array(
				'nik_alternatif'  => $nik_alternatif,
				'nama_alternatif'     => $nama_alternatif,
				'nama_dusun' => $nama_dusun,
				'rt'     => $rt,
				'rw' => $rw
			);
			
			$this->model_data->insert($data_insert,'data_alternatif');
			redirect('c_admin/data_alternatif');
		}
				
	}

	public function hapus_data_alternatif()
	{
		$id_alternatif = $this->input->get('id_alternatif');
		$where = array(            
            'id_alternatif' =>  $id_alternatif
        );
		// print($id_longlist);die();
        $this->model_data->delete_data($where,'data_alternatif');
     	redirect('c_admin/data_alternatif');	
			   
	}

	public function tampil_edit_data_alternatif()
	{
		$id_alternatif = $this->input->get('id_alternatif');
		$where = array(            
            'id_alternatif' =>  $id_alternatif
        );
        $data['data_alternatif'] = $this->model_data->pilih_data($where ,'data_alternatif');
        $this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_edit_data_alternatif' ,$data);
	}

	public function edit_data_alternatif()
	{
		$id_alternatif_get = $this->input->get('id_alternatif');
		$this->form_validation->set_rules('nik_alternatif', 'NIK', 'callback_check_nik|required');
		if($this->form_validation->run() == false )
		{
			$this->session->set_flashdata('nik_alternatif', form_error('nik_alternatif'));
			redirect('c_admin/tampil_edit_data_alternatif?id_alternatif='.$id_alternatif_get.'');	
		}
		else
		{
			$id_alternatif = $this->input->post('id_alternatif',true);
			// $kode_longlist = $this->input->post('kode_longlist');
			$nik_alternatif = $this->input->post('nik_alternatif',true);
			$nama_alternatif = $this->input->post('nama_alternatif',true);
			$nama_dusun = $this->input->post('nama_dusun',true);
			$rt = $this->input->post('rt',true);
			$rw = $this->input->post('rw',true);

			$where = array(
				'id_alternatif' => $id_alternatif
			);

			$data = array(
				// 'kode_longlist' => $kode_longlist,
				'nik_alternatif' => $nik_alternatif,
				'nama_alternatif' => $nama_alternatif,
				'nama_dusun' => $nama_dusun,
				'rt' => $rt,
				'rw' => $rw
			);
			$this->model_data->edit_data($where,$data,'data_alternatif');
			$this->session->set_flashdata('success','Berhasil Mengedit Data '. $nama_alternatif);
			redirect('c_admin/data_alternatif');	
		}	
	}

	function check_nik($nik_alternatif) {        
		if($this->input->post('id_alternatif'))
			$id_alternatif = $this->input->post('id_alternatif');
		else
			$id_alternatif = '';
			$result = $this->model_data->check_unique_nik($id_alternatif, $nik_alternatif);
		if($result == 0)
			$response = true;
		else {
			$this->form_validation->set_message('check_nik', 'NIK must be unique');
			$response = false;
		}
		return $response;
	}

	//data login
	public function data_login()
	{	
		$data['data_login'] = $this->model_data->data('level','data_login');
		// print($data['data_longlist'][0]['kode_longlist']);die();
		$this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_data_login',$data);
	}

	public function tampil_tambah_data_login()
	{
		$this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_tambah_data_login' );		
	}

	public function tambah_data_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'is_unique[data_login.username]|required');
		// $validation = $this->form_validation->setRules([
		// 	'username' => 'required||is_unique[data_login.username]'
		// ]);
		if($this->form_validation->run() == false )
		{
			$this->session->set_flashdata('username', form_error('username'));
			redirect('c_admin/tampil_tambah_data_login');	
		}
		else{
			$nama = $this->input->post('nama',true);
			$divisi = $this->input->post('divisi',true);
			$no_telepon = $this->input->post('no_telepon',true);
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			$level = $this->input->post('level',true);
			
			$data_insert = array(
				// 'id_login'=> $id_login,
				'nama'  => "kosong",
				'divisi'  => "kosong",
				'no_telepon'     => 0,
				'username'  => $username,
				'password'  => $password,
				'level' => $level
			);
			$this->model_data->insert($data_insert,'data_login');
			redirect('c_admin/data_login');
		}
		// $login = array(
        //     'username'  => $username,
        //     'password'  => $password,
		// 	'level' => $level
        // );
		// $this->model_data->insert($login,'login');
		// $id_login= $this->db->insert_id();		
	}

	public function hapus_data_login()
	{
		$id_datalogin = $this->input->get('id_datalogin');
		// $id_login = $this->input->get('id_login');

		// print($id_login);die();
		// $where = array(            
        //     'id_login' =>  $id_login
        // );
		// $this->model_data->delete_data($where,'login');

		$where = array(            
            'id_datalogin' =>  $id_datalogin
        );
        $this->model_data->delete_data($where,'data_login');
     	redirect('c_admin/data_login');		   
	}

	public function tampil_edit_data_login()
	{
		$id_datalogin = $this->input->get('id_datalogin');
		$where = array(            
            'id_datalogin' =>  $id_datalogin
        );
        // $data['data_login'] = $this->model_data->pilih_data($where ,'data_login');
		$data['data_login'] = $this->model_data->pilih_data($where,'data_login');
        $this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_edit_data_login' ,$data);

	}

	public function edit_data_login()
	{
		$id_datalogin_get = $this->input->get('id_datalogin');
		$this->form_validation->set_rules('username', 'Username', 'callback_check_username|required');
		if($this->form_validation->run() == false )
		{
			$this->session->set_flashdata('username', form_error('username'));
			redirect('c_admin/tampil_edit_data_login?id_datalogin='.$id_datalogin_get.'');	
		}
		else
		{
			$id_datalogin = $this->input->post('id_datalogin',true);
			// $id_login = $this->input->post('id_login');
			$nama = $this->input->post('nama',true);
			$divisi = $this->input->post('divisi',true);
			$no_telepon = $this->input->post('no_telepon',true);
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			$level = $this->input->post('level',true);
			
			$where = array(
				'id_datalogin' => $id_datalogin
			);
			$data_login = array(
				'username'  => $username,
				'password'  => $password,
				'level' => $level
			);
			$this->model_data->edit_data($where,$data_login,'data_login');
			$this->session->set_flashdata('success','Berhasil Mengedit Data ');
			redirect('c_admin/data_login');	
		}		
	}
	
	function check_username($username) {        
		if($this->input->post('id_datalogin'))
			$id_datalogin = $this->input->post('id_datalogin');
		else
			$id_datalogin = '';
			$result = $this->model_data->check_unique_username($id_datalogin, $username);
		if($result == 0)
			$response = true;
		else {
			$this->form_validation->set_message('check_username', 'Username must be unique');
			$response = false;
		}
		return $response;
	}


	//INFO DATA DIRI
	public function data_info(){
		$username = $this->session->userdata('username');
		$where = array(            
            'username' =>  $username
        );

		$data['data_info'] = $this->model_data->tampil_data_login($where);
		$this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		
		$this->load->view('admin/v_tampil_data_info', $data);
	}

	public function tambah_data_info()
	{
		$this->form_validation->set_rules('no_telepon', 'No. telepon', 'is_unique[data_login.no_telepon]|required');
		if($this->form_validation->run() == false )
		{
			$this->session->set_flashdata('no_telepon', form_error('no_telepon'));
			redirect('c_admin/data_info');	
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

			redirect('c_admin/data_info');	
		}
			
	}


	//kriteria
	public function data_kriteria()
	{
		$data['data_kriteria'] = $this->model_data->data('kode_kriteria','data_kriteria');

		// print($data['data_longlist'][0]['kode_longlist']);die();
		$this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_data_kriteria' ,$data);

	}

	public function tampil_tambah_kriteria()
	{
		$this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_tambah_data_kriteria' );		
	}

	public function tambah_data_kriteria()
	{
		$this->form_validation->set_rules('kode_kriteria', 'Kode Kriteria', 'is_unique[data_kriteria.kode_kriteria]|required');
		if($this->form_validation->run() == false )
		{
			$this->session->set_flashdata('kode_kriteria', form_error('kode_kriteria'));
			redirect('c_admin/tampil_tambah_kriteria');	
		}
		else
		{
			$kode_kriteria = $this->input->post('kode_kriteria');		
			$nama_kriteria = $this->input->post('nama_kriteria');
		
			$data_insert = array(
				'kode_kriteria'  => $kode_kriteria,
				'nama_kriteria'  => $nama_kriteria
			);
			$this->model_data->insert($data_insert,'data_kriteria');
			redirect('c_admin/data_kriteria');
		}
	}

	public function hapus_data_kriteria()
	{
		$id_kriteria = $this->input->get('id_kriteria');
		$where = array(            
            'id_kriteria' =>  $id_kriteria
        );

		// print($id_longlist);die();
        $this->model_data->delete_data($where,'data_kriteria');
     	redirect('c_admin/data_kriteria');		   
	}

	public function tampil_edit_data_kriteria()
	{
		$id_kriteria = $this->input->get('id_kriteria');
		$where = array(            
            'id_kriteria' =>  $id_kriteria
        );

        $data['data_kriteria'] = $this->model_data->pilih_data($where ,'data_kriteria');
        // print($data['data_kriteria'][0]['kode_kriteria']);die();

        $this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		
		$this->load->view('admin/v_edit_data_kriteria' ,$data);

	}

	public function edit_data_kriteria()
	{
		$id_kriteria_get = $this->input->get('id_kriteria');
		$this->form_validation->set_rules('kode_kriteria', 'Kode Kriteria', 'callback_check_kode_kriteria|required');
		if($this->form_validation->run() == false )
		{
			$this->session->set_flashdata('kode_kriteria', form_error('kode_kriteria'));
			redirect('c_admin/tampil_edit_data_kriteria?id_kriteria='.$id_kriteria_get.'');	
		}
		else
		{
			$id_kriteria = $this->input->get('id_kriteria');
			$kode_kriteria = $this->input->post('kode_kriteria');		
			$nama_kriteria = $this->input->post('nama_kriteria');
		
			$where = array(
				'id_kriteria' => $id_kriteria
			);
			$data = array(
				'kode_kriteria'  => $kode_kriteria,
				'nama_kriteria'  => $nama_kriteria
			);
			$this->model_data->edit_data($where,$data,'data_kriteria');
			$this->session->set_flashdata('success','Berhasil Mengedit Data ');
			redirect('c_admin/data_kriteria	');		
		}		
	}
	function check_kode_kriteria($kode_kriteria) {        
		if($this->input->post('id_kriteria'))
			$id_kriteria = $this->input->post('id_kriteria');
		else
			$id_kriteria = '';
			$result = $this->model_data->check_unique_kode_kriteria($id_kriteria, $kode_kriteria);
		if($result == 0)
			$response = true;
		else {
			$this->form_validation->set_message('check_kode_kriteria', 'Kode Kriteria must be unique');
			$response = false;
		}
		return $response;
	}

	//PEMBOBOTAN
	public function tampil_pembobotan(){

	}

	//SUB KRITERIA

	public function data_subkriteria()
	{
		
		$data['data_subkriteria'] = $this->model_data->data_subkriteria('data_subkriteria');

		// print($data['data_longlist'][0]['kode_longlist']);die();
		$this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		
		$this->load->view('admin/v_data_subkriteria' ,$data);

	}

	public function tampil_tambah_subkriteria()
	{
		$ambil_data['data_kriteria'] = $this->model_data->data('kode_kriteria','data_kriteria');

		$this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_tambah_data_subkriteria'  , $ambil_data);		
	}

	public function tambah_subkriteria()
	{
		$this->form_validation->set_rules('kode_subkriteria', 'Kode Sub Kriteria', 'is_unique[data_subkriteria.kode_subkriteria]|required');
		if($this->form_validation->run() == false )
		{
			$this->session->set_flashdata('kode_subkriteria', form_error('kode_subkriteria'));
			redirect('c_admin/tampil_tambah_subkriteria');	
		}
		else
		{
			$list_id_kriteria = $this->input->post('list_id_kriteria',true);		
			$kode_subkriteria = $this->input->post('kode_subkriteria',true);		
			$nama_subkriteria = $this->input->post('nama_subkriteria',true);
			$nilai_subkriteria = $this->input->post('nilai_subkriteria',true);
			
			$data_insert = array(
				'id_kriteria' => $list_id_kriteria,
				'kode_subkriteria'  => $kode_subkriteria,
				'nama_subkriteria'  => $nama_subkriteria,
				'nilai_subkriteria' => $nilai_subkriteria
			);

			$this->model_data->insert($data_insert,'data_subkriteria');
			redirect('c_admin/data_subkriteria');	
		}	
	}

	public function hapus_data_subkriteria()
	{
		$id_kriteria = $this->input->get('id_subkriteria');
		$where = array(            
            'id_subkriteria' =>  $id_kriteria
        );

		// print($id_longlist);die();
        $this->model_data->delete_data($where,'data_subkriteria');
     	redirect('c_admin/data_subkriteria');		   
	}
 
	public function tampil_edit_data_subkriteria()
	{
		$id_subkriteria = $this->input->get('id_subkriteria');
		$where = array(            
            'id_subkriteria' =>  $id_subkriteria
        );
        
        $data['data_subkriteria'] = $this->model_data->data_subkriteria_where($where);
        $data['data_kriteria'] = $this->model_data->data('kode_kriteria','data_kriteria');
        // print($data['data_kriteria'][0]['kode_kriteria']);die();

        $this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_edit_data_subkriteria' ,$data);

	}

	public function edit_data_subkriteria()
	{
		$id_subkriteria_get = $this->input->get('id_subkriteria');
		$this->form_validation->set_rules('kode_subkriteria', 'Kode Sub Kriteria', 'callback_check_kode_subkriteria|required');
		if($this->form_validation->run() == false )
		{
			$this->session->set_flashdata('kode_subkriteria', form_error('kode_subkriteria'));
			redirect('c_admin/tampil_edit_data_subkriteria?id_subkriteria='.$id_subkriteria_get.'');	
		}
		else
		{
			$id_subkriteria = $this->input->get('id_subkriteria');
			$list_id_kriteria = $this->input->post('list_id_kriteria');		
			$kode_subkriteria = $this->input->post('kode_subkriteria');		
			$nama_subkriteria = $this->input->post('nama_subkriteria');
			$nilai_subkriteria = $this->input->post('nilai_subkriteria');
			
			$where = array(
				'id_subkriteria' => $id_subkriteria
			);

			$data = array(
				'id_kriteria' => $list_id_kriteria,
				'kode_subkriteria'  => $kode_subkriteria,
				'nama_subkriteria'  => $nama_subkriteria,
				'nilai_subkriteria' => $nilai_subkriteria
			);
			$this->model_data->edit_data($where,$data,'data_subkriteria');
			$this->session->set_flashdata('success','Berhasil Mengedit Data ');
			redirect('c_admin/data_subkriteria	');	
		}		
	}
	function check_kode_subkriteria($kode_subkriteria) {        
		if($this->input->post('id_subkriteria'))
			$id_subkriteria = $this->input->post('id_subkriteria');
		else
			$id_subkriteria = '';
			$result = $this->model_data->check_unique_kode_subkriteria($id_subkriteria, $kode_subkriteria);
		if($result == 0)
			$response = true;
		else {
			$this->form_validation->set_message('check_kode_subkriteria', 'Kode Sub Kriteria must be unique');
			$response = false;
		}
		return $response;
	}

	public function data_survey_lapangan()
	{
		//data_paten
		// $data['data_survey_lapangan'] = $this->model_data->data('id_alternatif','data_survey_lapangan');
		// // print($data['data_longlist'][0]['kode_longlist']);die();
		// $this->load->view('pihakpelaksana/v_sidebar_pihakpelaksana');
		// $this->load->view('pihakpelaksana/v_navbar_pihakpelaksana');
		// $this->load->view('pihakpelaksana/v_data_survei_longlist' ,$data);
		
		//data tidak paten
		$kriteria = $this->db->query("SELECT * FROM data_kriteria")->result_array();
		
		$tampil = $this->db->query("SELECT b.*,c.nama_subkriteria, c.id_subkriteria,c.nilai_subkriteria, c.id_kriteria
        FROM
        	data_lapangan a
        JOIN
            data_alternatif b ON a.id_alternatif = b.id_alternatif
        JOIN
			data_subkriteria c ON a.id_subkriteria = c.id_subkriteria");

		$row= $tampil->result_array();
		foreach($row as $row){
			$data_kriteria[$row['nik_alternatif']][$row['id_kriteria']]=$row['nama_subkriteria'];
		}
		// print_r($data);
		$data['total_kriteria']= count($kriteria);
		$data['kriteria']= $kriteria;
		$data['data_kriteria']= $data_kriteria;

		// print($data['data_longlist'][0]['kode_longlist']);die();
		$this->load->view('admin/v_side_bar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_data_survei_longlist' ,$data);
	}
}
?>