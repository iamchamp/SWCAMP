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

	public function update($number = 0)
	{	
	
		$data['loginData'] = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session ชื่อ login
		$data['number'] = $number;
		//$this->load->view('showstd2', $data);
		$this->load->model('member');
		$isError = false;
		$isSuscess = false;
		$data['error'] = array();
		$data['suscess'] = array();
		
		
		$data['memberAll'] =$this->member->findByPk($this->input->post('id'));

		
	


		if($this->input->post())// ฟังก์ชั่นปุ่มแรก
		{
			if($this->input->post('name') == '')
			{
				$isError = true;
				$data['error'][] = '<font color="red">กรุณากรอกpasswordใหม่ให้ถูกต้อง</font>';
			}
				
			if($this->input->post('lastname') == '')
			{
				$isError = true;
				$data['error'][] = '<font color="red">กรุณาเลือกวันที่ที่ต้องการ</font>';
			}
				
				
				if(!$isError)
			{

					
						$data ['memberAll']=$this->member->findByPk($this->input->post('id'));
						$this->member->setId($this->input->post('id'));
						$this->member->setName ($this->input->post('name'));
						$this->member->setLastName($this->input->post('lastname'));
						
						if($this->member->update());
						//$data['suscess'][] = '<font color="green">เปลี่ยนรหัสผ่านสำเร็จ</font>';
					
					
				}

					
						$this->load->view('update', $data);

						
		}


		else{
		
		$this->load->view('update', $data);
		}
}
	
}



