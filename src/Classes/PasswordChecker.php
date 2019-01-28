<?php
class PasswordChecker
{
	public $pw; //Public variable for backwards compatibility, some packages depend on this
	private $realPw; //Private for maximum security

	public function __construct($realPw)
	{
		$this->realPw = $realPw;
		$this->pw = $realPw;
	}

	public function RealCheckPassword($password)
	{
		if ($password == $this->realPw)
		{
			return true;
		}
		return false;
	}
}
?>
