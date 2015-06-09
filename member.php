<?php
class Member extends CI_Model
{
		var $id; //
		var $name; //
		var $lastname; //
		var $username; //
		var $password; //
		

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
	public function setLastname($lastname)
	{
		$this->lastname = $lastname;
	}

	public function getLastname()
	{
		return $this->lastname;
	}
	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getUsername()
	{
		return $this->username;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function add()
	{
		$array = array
		(
			'id' => $this->getId(),
			'name'  => $this->getName(),
			'lastname' => $this->getLastname(),
			'username' => $this->getUsername(),
			'password' => $this->getPassword()
		);

		$this->db->insert('register', $array);
	}
	

}
?>