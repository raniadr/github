<?php
	class client{

		private $id=null;
		private $username=null;
		private $email=null;
		private $password=null;
		
		function __client( $username, $email, $password){
			$this->username=$username;
			$this->email=$email;
			$this->password=$password;
		}

		function getid(){
			return $this->id;
		}

		function getusername(){
			return $this->username;
		}

		function getemail(){
			return $this->email;
		}

		function getpassword(){
			return $this->password;
		}
	
		function setusername(string $username){
			$this->name=$name;
		}

		function setemail(string $email){
			$this->email=$email;
		}

		function setpassword(string $password){
			$this->password=$password;
		}
	}
?>