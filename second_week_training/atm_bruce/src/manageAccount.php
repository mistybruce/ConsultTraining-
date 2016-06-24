<?php

class manageAccount extends BankAccount{
   	public function __construct($NewBalance){
			$this->NewBalance = $NewBalance;
				
		}
        public function getNewBalance($NewBalance){
			return $this->NewBalance;
		} 

		public function setNewBalance($NewBalance){	
			$this->Pin = $Pin;
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

  public function depositfunds() {
  	   $DepositAmount = readLine("How much would you like to withdraw today?"\n); 
 	   $this->NewBalance =$Balance + $DepositAmount;
 	   Echo "Your new balance is\n" . '$NewBalance'\n; 
 	   return $NewBalance;
    }
        //allow user to withdraw funds, if available
  public function withdrawfunds() {
 	  $WithdrawalAmount = readLine("How much would you like to withdraw today?"\n);
 	if {
 		 ($WithdrawalAmount > $Balance);
 		 echo "We're sorry, your funds are insufficient"\n;
        }
 	else {
         $NewDecreasedBalance = ($Balance - $DepositAmount); 
 	      Echo "Your new balance is\n" . '$NewDecreasedBalance';
           return $NewDecreasedBalance;
        }

 	}
 }}

