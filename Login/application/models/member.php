<?php
class member extends CI_Model
{
			var $id; //
			var $name; //
			var $lastName; //
			var $userName; //
			var $passWord; //
			var $status; //		

	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}

	###################################### GET SET ######################################
 ###### SET : $id ######

	public function setId($id)
	{
		$this->id = $id;
	}
###### SET : $id ######

###### GET : $id ######

	public function getId()
	{
		return $this->id;
	}
###### GET : $id ######



###### SET : $name ######

	public function setName($name)
	{
		$this->name = $name;
	}
###### SET : $name ######

###### GET : $name ######

	public function getName()
	{
		return $this->name;
	}
###### GET : $name ######


###### SET : $lastName ######

	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}
###### SET : $name ######


###### GET : $lastName ######

	public function getLastName()
	{
		return $this->lastName;
	}
###### GET : $lastName ######



###### SET : $userName ######


	public function setUserName($userName)
	{
		$this->userName = $userName;
	}
###### SET : $userName ######

###### GET : $userName ######

	public function getUserName()
	{
		return $this->userName;
	}
###### GET : $userName ######


###### SET : $passWord ######

	public function setPassWord($passWord)
	{
		$this->passWord = $passWord;
	}
###### SET : $passWord ######
###### GET : $userName ######

	public function getPassWord()
	{
		return $this->passWord;
	}
###### GET : $userName ######


###### SET : $status ######

	public function setStatus($status)
	{
		$this->status = $status;
	}
###### SET : $status ######
###### GET : $status ######

	public function getStatus()
	{
		return $this->status;
	}
###### GET : $status ######
###################################### End GET SET ######################################


###################################### findByUserName ######################################

	function findByUserName($UserName)
	{
		$query=$this->db->query
			('
				SELECT id,name,lastName FROM member WHERE id LIKE "%'. $UserName .'%" ORDER BY username
			');
			
		return $query;
	}
###################################### findByUserName ######################################


###################################### findByPk ######################################

	function findByPk($pk)
	{
		$query=$this->db->query
			('
				SELECT id,name,lastname,userName FROM member WHERE id LIKE "%'. $pk .'%" ORDER BY username
			');
			
		return $query;
	}
###################################### findByPk ######################################


###################################### findByAll ######################################

	function findByAll($All)
	{
		$query=$this->db->query
			('
				SELECT id,name,lastName,userName,passWord,status  FROM member WHERE id LIKE "%'. $All .'%" ORDER BY username
			');
			
		return $query;
	}
###################################### findByAll ######################################


###################################### update ######################################

public function update()
	{
		$data = array(
				'id'=>$this->getId(),
				'name'=>$this->getName(),
				'lastName'=>$this->getLastName()
       
					  );
	
		$this->db->where('id', $this->getId());
		$this->db->update('member', $data);
	}

###################################### update ######################################


###################################### delete ######################################
public function delete()
	{
			$array=array(
				'id'=>$this->getId(),
				'name'=>$this->getName(),
				'lastName'=>$this->getLastName(),
				'userName'=>$this->getuserName(),
				'passWord'=>$this->getpassWord(),
				'status'=>$this->getstatus()

				       );
		$this->db->delete('member',$array);
	}

###################################### delete ######################################

###################################### add ######################################
public function add()
	{
		$array = array
		(
			'id' => $this->getId(),
			'name'  => $this->getName(),
			'lastName' => $this->getLastName(),
			'userName' => $this->getUserName(),
			'passWord' => $this->getPassWord(),
			'status' => $this->getStatus()
		);

		$this->db->insert('member', $array);
	}
	###################################### add ######################################

	######################## function login #############################
	function login()
	 {
	   $this -> db -> select('*');  						###########
	   $this -> db -> from('member'); 						 ########### เช็คข้อมูลใน DB 
	   $this -> db -> where('username', $this->getUserName()); ###########
	   $this -> db -> where('password', $this->getPassWord()); ###########
	   $this -> db -> limit(1); ############## ตำกัดให้คืนค่าแค่ record เดียว

	   $query = $this -> db -> get(); ##############  สั่งดึงข้อมูลตามเงื่อนไข
	
	   if($query -> num_rows() == 1)  ############  เมื่อมีข้อมูล 1 record 
	   {
		 return $query->result(); ############# ส่งค้าที่ดึงได้กลับ
	   }
	   else ########### เมื่อไม่ตรงตามเงื่อนไข
	   {
			  return FALSE;  ############# ส่งค้า FALSE กลับ
	   }
	 }
	 ######################## end function login #############################
	
}

?>