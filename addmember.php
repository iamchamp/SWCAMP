<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addmember extends CI_Controller {

	public function index($number = 0)
	{
		$data['number'] = $number;
		
		$this->load->model('register');

		
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
				
				$this->register->setName($this->input->post('name'));
				$this->register->setPassWord($this->input->post('password'));
				$this->register->setStatus($this->input->post('status'));
				$this->register->setUserName($this->input->post('username'));
				$this->register->setLastName($this->input->post('lastname'));
			
				
				
				$this->register->add();
				$data['suscess'][] = '<font color="green">กรอกข้อมูลสำเร็จ</font>';
			}

			
		}

		$this->load->view('register',$data);
	
	}


function delete($number=0){  	  //// ฟังชั่นในการเรียกใช้งานครั้งแรก 
		$loginData['loginData'] = $this->session->userdata('loginData');/// แรกข้อมูลที่เก็บใน session ชื่อ loginData
 		
		$data['number'] = $number;
		//$this->load->view('showstd2', $data);
		$this->load->model('register');
		$isError = false;
		$isSuscess = false;
		$data['error'] = array();
		$data['suscess'] = array();
		
		
		$data['memberAll'] =$this->register->findByPk($this->input->post('id'));

		
	


		if($this->input->post())// ฟังก์ชั่นปุ่มแรก
		{
				
			if($this->input->post('id') == '')
			{
				$isError = true;
				$data['error'][] = '<font color="red">กรุณาเลือกวันที่ที่ต้องการ</font>';
			}
				if(!$isError)
			{

					
						$data ['memberAll']=$this->register->findByPk($this->input->post('id'));
						$this->register->setId($this->input->post('id'));
						if($this->register->delete());
						$data['suscess'][] = '<font color="green">ลบข้อมูลสำเร็จ</font>';

				
						
				}
				$data['memberAll'] =$this->register->findByAll($this->input->post('name'));
						$this->load->view('delete', $data);

				
		}
		else{
			$data['memberAll'] =$this->register->findByAll($this->input->post('name'));
		$this->load->view('delete', $data);
		}
 }
	
	public function update($number = 0)
	{	
	
		$data['loginData'] = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session ชื่อ login
		$data['number'] = $number;
		//$this->load->view('showstd2', $data);
		$this->load->model('register');
		$isError = false;
		$isSuscess = false;
		$data['error'] = array();
		$data['suscess'] = array();
		
		
		$data['memberAll'] =$this->register->findByPk($this->input->post('id'));

		
	


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

					
						$data ['memberAll']=$this->register->findByPk($this->input->post('id'));
						$this->register->setName($this->input->post('name'));
						$this->register->setLastName ($this->input->post('lastname'));
						
						
						if($this->register->update());
						$data['suscess'][] = '<font color="green">เปลี่ยนรหัสผ่านสำเร็จ</font>';
					
					
				}

					
						$this->load->view('update', $data);

						
		}


		else{
		
		$this->load->view('update', $data);
		}
}
}



