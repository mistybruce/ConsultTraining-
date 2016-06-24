<?php

include('UserInterface.php');
abstract class Account implements BankingInterface{

		public function __construct($name, $id){
			$this->name = $name;
			$this->ID = $ID;	
		}
		public function getName(){
			return $this->name;
		}
		public function setName($name){
			$this->name = $name;
		}

		public function getID($ID){
			return $this->ID;
		} 
        public function setID($ID){
        	$this->ID = $ID;
        }
}

