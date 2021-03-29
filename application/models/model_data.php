<?php

class Model_data extends CI_Model
{
	function login_model($username, $password, $level)
	{
		$this->db->select('*');
		$this->db->from('data_login');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$this->db->where('level',md5($level));
		return $this->db->get()->row();
	}
	
	// cek unique
	// data login
	function check_unique_username($id_datalogin = '', $username) {
        $this->db->where('username', $username);
        if($id_datalogin) {
            $this->db->where_not_in('id_datalogin', $id_datalogin);
        }
        return $this->db->get('data_login')->num_rows();
    }
	// data alternatif
	function check_unique_nik($id_alternatif = '', $nik_alternatif) {
        $this->db->where('nik_alternatif', $nik_alternatif);
        if($id_alternatif) {
            $this->db->where_not_in('id_alternatif', $id_alternatif);
        }
        return $this->db->get('data_alternatif')->num_rows();
    }
	// data kriteria
	function check_unique_kode_kriteria($id_kriteria = '', $kode_kriteria) {
        $this->db->where('kode_kriteria', $kode_kriteria);
        if($id_kriteria) {
            $this->db->where_not_in('id_kriteria', $id_kriteria);
        }
        return $this->db->get('data_kriteria')->num_rows();
    }
	// data sub kriteria
	function check_unique_kode_subkriteria($id_subkriteria = '', $kode_subkriteria) {
        $this->db->where('kode_subkriteria', $kode_subkriteria);
        if($id_subkriteria) {
            $this->db->where_not_in('id_subkriteria', $id_subkriteria);
        }
        return $this->db->get('data_subkriteria')->num_rows();
    }



	function insert($data,$table)
	{
		return $this->db->insert($table,$data);
	}
	function cek($where,$table)
	{
		$query = $this->db->get_where($table,$where);
		return $query->row_array();
    }
    function ambil_user($where,$table)
	{
		$query = $this->db->get_where($table,$where);
		return $query->row_array();
	}
	function data($namakolom, $table)
	{
		$this->db->order_by($namakolom, 'ASC');
		$query = $this->db->get($table);
		// print_r($this->db->last_query()); 
		return $query->result_array();		
	}
	function delete_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function pilih_data($where , $table)
	{
		$this->db->select('*');
		$this->db->from($table);			
		$this->db->where($where);
		$query=$this->db->get();			
		$data= $query->result_array();
			 
		return $data;
	}
	function data_subkriteria()
	{
		$this->db->select('*');
		$this->db->from('data_subkriteria');	
		$this->db->join('data_kriteria','data_kriteria.id_kriteria=data_subkriteria.id_kriteria');					
		$query=$this->db->get();			
		$data= $query->result_array();
		// print_r($this->db->last_query()); 
		return $data;
	}
	function data_subkriteria_where($where)
	{
		$this->db->select('*');
		$this->db->from('data_subkriteria');	
		$this->db->join('data_kriteria','data_kriteria.id_kriteria=data_subkriteria.id_kriteria');	
		$this->db->where($where);				
		$query=$this->db->get();			
		$data= $query->result_array();
		
		return $data;
	}

	function edit_data($where,$data,$table)
	{		
		$this->db->where($where);
		$this->db->update($table,$data);
			
	}
	function get_count($table)
	{

		$query = $this->db->query("SELECT * FROM $table");
		$data = $query->num_rows();
		return $data;
	}

	
	// Belum digunakan
	// function data_login_where()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('data_login');	
	// 	// $this->db->join('data_login','data_login.id_login=login.id_login');	
					
	// 	$query=$this->db->get();			
	// 	$data= $query->result_array();
		
	// 	return $data;
	// }
	
	function tampil_data_login($where)
	{
		$this->db->select('*');
		$this->db->from('data_login');	
		// $this->db->join('data_login','data_login.id_login=login.id_login');	
		$this->db->where($where);
					
		$query=$this->db->get();			
		$data= $query->result_array();
		
		return $data;
	}
	function ambil_data_alternatif()
	{
		$this->db->select('*');
		$this->db->from('data_alternatif');					
		$query=$this->db->get();			
		$data= $query->result_array();
		print_r($this->db->last_query()); 
		return $data;
	}
	function data_survei_lapangan_where($where)
	{
		$this->db->select('*');
		$this->db->from('data_survey_lapangan');	
		// $this->db->join('data_kriteria','data_kriteria.id_kriteria=data_subkriteria.id_kriteria');	
		$this->db->where($where);				
		$query=$this->db->get();			
		$data= $query->result_array();
		
		return $data;
	}
	
}

?>