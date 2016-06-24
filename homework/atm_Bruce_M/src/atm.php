<?php
class ATM{
	public $bank = null;
	public $currentUserf = null;

	public function __construct() {
		$this->bank = new Bank;
	}
    public function userlogi,($id, $pin)
    $account = $this->bank->accountLook ($id,$pin);
    if (account =PinError)
    	[
    	ECHO "PIN INCORRECT. PLEASE TRY AGAIN\n";]
    elseif($account =="IdError")
    {
    	echo "Account not found"\n;
    	{else 
    	}

    	$this->currentUser = $account;
    	echo "Log in complete. Welcome, {$this->currentuser->getName()}.\n";
    }
}
Public function userLogout()
{
$this->currentUser != null);
echo "you have loged out.\n";

public function deposit($amount)
{
if ($this->currentUser != null)
}
  $this->bank->desposit($this->currentUser, $amount);
}else
{
	echo "Please log in first.\n";
}
}
public function withdraw($amount) {
	if ($this->currentUser != null)
}
   $this->bank->withdraw($this->currentUser, $amount);
   
     else
     	







}