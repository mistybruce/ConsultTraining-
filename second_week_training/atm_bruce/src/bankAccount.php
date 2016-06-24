<?php

class BankAccount extends Account{
		protected $Pin, $Balance;
		public function __construct($Pin, $Balance){
			$this->Pin = $Pin;
			$this->Balance = $Balance;	
		}
        public function getPin($Pin){
			return $this->Pin;
		} 

		public function setPin($Pin){	
			$this->Pin = $Pin;
		    }
        
		public function getBalance($Balance){
			return $this->Balance;	
			}	
		} 
        public function setBalance($Balance){
        	$this->Balance = $Balance;
            }
        }
         
