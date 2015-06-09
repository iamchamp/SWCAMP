<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addmember extends CI_Controller {

	public function index($number = 0)
	{
		$data['number'] = $number;
		
		$this->load->model('member');

		
		$isError = false;
		//$isSuscess = false;
		$data['error'] = array();
		$data['suscess'] = array();
		if($this->input->post())
		{
			if($this->input->post('username') == '')
			{
				$isError = true;
				$data['error'][] = '<font color="red">กรุณากรอกUsernameให้ถูกต้อง</font>';
			}
			if($this->input->post('password') == '')
			{
				$isError = true;
				$data['error'][] = '<font color="red">กรุณากรอกPasswordให้ถูกต้อง</font>';
			}
		
			if($this->input->post('name') == '')
			{
				$isError = true;
				$data['error'][] = '<font color="red">กรุณากรอกชื่อให้ถูกต้อง</font>';
			}
			if($this->input->post('lastname') == '')
			{
				$isError = true;
				$data['error'][] = '<font color="red">กรุณากรอกนามสกุลให้ถูกต้อง</font>';
			}
			if($this->input->post('status') == '')
			{
				$isError = true;
				$data['error'][] = '<font color="red">กรุณายอมรับข้อตกลง</font>';
			}
		
			if(!$isError)
			{
				
				$this->member->setName($this->input->post('name'));
				$this->member->setPassWord($this->input->post('password'));
				$this->member->setStatus($this->input->post('status'));
				$this->member->setUserName($this->input->post('username'));
				$this->member->setLastName($this->input->post('lastname'));
			
				
				
				$this->member->add();
				$data['suscess'][] = '<font color="green">กรอกข้อมูลสำเร็จ</font>';
			}

			
		}

		$this->load->view('showregister',$data);
	
	}
	
}



