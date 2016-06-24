<?php

class BankAccount extends Account{
		private $Pin = 0000;
		private $Balance = 0;

        public function getPin($){
			return $this->Pin;
		} 

		public function setPin($pin){	
			$this->Pin = $Pin;
		    }
        
		public function getBalance(){
			return $this->Balance;	
			}	
		
        public function setBalance($Balance){
        	$this->Balance = $Balance;
            }
        }
         
