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

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}
	public function setUserName($userName)
	{
		$this->userName = $userName;
	}

	public function getUserName()
	{
		return $this->userName;
	}
	public function setPassWord($passWord)
	{
		$this->passWord = $passWord;
	}

	public function getPassWord()
	{
		return $this->passWord;
	}
	public function setStatus($status)
	{
		$this->status = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}



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
	

}
?>