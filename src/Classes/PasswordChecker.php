<?php
class PasswordChecker
{
	private $pw; //Private for maximum security

	public function __construct($pw)
	{
		$this->pw = $pw;
	}

	public function RealCheckPassword($password)
	{
		if ($password == $this->pw)
		{
			return true;
		}
		return false;
	}
}
?>
