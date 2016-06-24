<?php

class Bank implements BankingInterface{
  public $NewIncBalance, $NewDecBalance;
  function __construct($NewIncBalance, $NewDecBalance) {
    $this->NewIncBalance = $NewIncBalance;
    $this->NewDecBalance = $NewDecBalance;
  }

    public function getNewIncBalance(){
      return $this->NewIncBalance;
    }
    public function setNewIncBalance($NewIncBalance){
      $this->NewIncBalance = $NewIncBalance;
    }
    public function getNewDecBalance(){
      return $this->NewDecBalance;
    }
    public function setDecIncBalance($NewDecBalance){
      $this->NewDecBalance = $NewDecBalance;
    }

   //display initial customer greeting and begin transaction
 public function showgreeting (){
 		echo "Greetings from The National Bank of Broke Rappers!\n";   
 		$response = (readline("to continue, please enter your PIN number\n"));     
            if  ($response = '1985'){
 			Echo "Welcome Mr. Hammer";
 		    }
 			 if ($response = "1989") {
 			 	Echo "Welcome Mr. Ice";
            }
 			  if ($response = "1987") {
 			 	Echo "Welcome Mr. Tee";
            }
 			  else {
 			 	echo "We're sorry, Invalid PIN.";
 			 }
 			}
       //layout customer options
 public function showoptions() {
 	   $choice = readline("What would you like to do ?\n");
 		 echo "1. Display Balance. \n";
 		 echo "2. Deposit Funds, we know, a long shot.\n";
 		 echo "3. Withdraw funds, may the force be with you.\n";
 		   return $choice;

 		switch ($choice) {
 			case 1: 
 			$this->showAccountInfo();
 			break;

 			case 2:
      $DepositAmount = readLine(ToString("How much would you like to deposit today?"\n));
 			$this->depositfunds();
 			break;

 			case 3:
 			$this->withdrawfunds();
 			break;

 			default:
 				echo "Not a valid input.";
 				break;	
             }
            } 

  public function showAccountInfo() { 
         echo  "Your balance is:\n" . '$Balance';
        }
        //allow user to deposit funds

  public function depositfunds($BankAccount,$account, $amount ) { 	
     $Balance= $account->getBalance();
     $account->setBalance($Balance + $amount);
 	   Echo "You deposited \n{$amount}. Your new balance is\n" {$account->getBalance()}\n;

    }
        //allow user to withdraw funds, if available
  public function withdrawfunds(BankAccount $account, $amount) {
 	  if (($Balance = $account) <0){
      echo "Insufficient funds!\n Your account balance is :\n{$Balance}\n";
      else {
        $account->setBalance($Balance - $amount);
       echo "your account now contains\${$account->getBalance()}\n";
      }
    }

        public function accountLookup($id, $pin) {
         for ($this->accounts aas $account) { 
           if($account->getId() == $id {
            if($account->getPin() == $pin)  {
              return $account;
             } else {
                return 'pinError";'
              }
            } else {
              return "idError";
            }
           }
          }

        public function createaccount($name, $id, $pin)
        {
           $newAccount = NEW BANKACCONT;
           $newAccount->setName($name);
           $newAccount->setId($id);
           $newAccount->setPin($Pin);

           array_push($this->,accounts,)$newAccount);
            eho "Account Created"\n;
        }
 	
 }
 	
 



 	

