<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class delete extends CI_Controller {
 function __construct()
 {
	   parent::__construct();
	   $this->checkStatus();
 }
function index($number=0){  	  //// ฟังชั่นในการเรียกใช้งานครั้งแรก 
		$loginData['loginData'] = $this->session->userdata('loginData');/// แรกข้อมูลที่เก็บใน session ชื่อ loginData
 		
		$data['number'] = $number;
		//$this->load->view('showstd2', $data);
		$this->load->model('room');
		$isError = false;
		$isSuscess = false;
		$data['error'] = array();
		$data['suscess'] = array();
		
		
		$data['memberAll'] =$this->room->findByPk($this->input->post('id'));

		
	


		if($this->input->post())// ฟังก์ชั่นปุ่มแรก
		{
				
			if($this->input->post('id') == '')
			{
				$isError = true;
				$data['error'][] = '<font color="red">กรุณาเลือกวันที่ที่ต้องการ</font>';
			}
				if(!$isError)
			{

					
						$data ['memberAll']=$this->room->findByPk($this->input->post('id'));
						$this->room->setId($this->input->post('id'));
						if($this->room->delete());
						$data['suscess'][] = '<font color="green">ลบข้อมูลสำเร็จ</font>';

				
						
				}
				$data['memberAll'] =$this->room->findAll($this->input->post('roomname'));
						$this->load->view('showroomadmin', $data);

				
		}
		else{
			$data['memberAll'] =$this->room->findAll($this->input->post('roomname'));
		$this->load->view('showroomadmin', $data);
		}
 }
 
  function checkStatus(){
	 $session_data = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session ชื่อ loginData
	 $status = $session_data['status'];/// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
	 if($status!="admin"){//เช็คค่า $satus ว่าเป็น admin หรือไม่ ถ้าไม่ให้ทำตาม Process
		echo '<script> alert("!!!คุณไม่มีสิทธิในการใช้งานส่วนนี้");
		   	 window.location.assign("'.base_url().'index.php/CheckLogin/redirects");
		   </script>';/// ไปยัง contorller CheckLogin ฟังชั่น redirects โดยใช้ Javascript
	 }
  }
}

?>