<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('model_data');
    }

    public function index()
	{
		$this->load->view('v_login');
	}

	public function cek_login()
	{
        // $id_datalogin = $this->input->get('id_datalogin');
		$username = $this->input->post('username');        
        $password = $this->input->post('password');

        $where = array(
            // 'id_datalogin' => $id_datalogin,
            'username' => $username,
            'password' => $password
        );

        $cek = $this->model_data->cek($where,'data_login');
        // print_r($cek );die();

        if($cek != null)
        {   
                $ambil_user = $this->model_data->ambil_user($where,'data_login');
                // print_r($ambil_user['id_login']);die();        
                $data_session = array(
                // 'id_datalogin' => $ambil_user['id_datalogin'],
                'username' => $ambil_user['username'],
                'password' => $ambil_user['password'],
                'level' => $ambil_user['level'],
                'status' => "login" 
            );

            $this->session->set_userdata($data_session);
            $this->session->$data_session;
            // print_r($data_session);die();
            
            if($ambil_user['level'] == "Admin"){
                //TAMPILAN admin
                redirect('c_admin'); 
            }
            else{    
                //pihakpelaksana          
                redirect('c_pihakpelaksana');              
            }
        }
        else
        {
            $this->session->set_flashdata('error', 'username atau password salah');
            redirect('login');
        }

	}
    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}
?>