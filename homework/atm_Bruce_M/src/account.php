<?php



abstract class Account {
protected $name, $id;
		
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

