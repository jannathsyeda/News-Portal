<?php

class admin_model extends CI_Model {

	
	public function validate()
	{
	

		$arr['username']=$this->input->post('username');
		$arr['password']=md5($this->input->post('password'));
	  return $this->db->get_where('admin',$arr)->row();
	}


function insertttt($addcard)
	{
		$this->db->insert('items',$addcard);
	}


/*
function insert_img($data_insert){
$this->db->insert('items',$data_insert);
}
*/
	
}

