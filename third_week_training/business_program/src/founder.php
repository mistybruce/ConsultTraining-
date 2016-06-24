<?php
class Founder {
	private $name {
		public function __construct ($name){
			$this->name = $name;
		}
		Public Function incorporate() {

		function __construct($Name) {
			$this->name = $name;
		}

		public function getName(){
			return $this->name;
		} 
        public function setName($name){
        	$this->name = $name;
        }
       Public function incorporte() {
       	$name = readline("what is your buiness naem?\n");
       	$type = readline("What industry are you going into?");
       	$revenue = readline("Di you have any funding?\n");

       	$newbiz = new Business($name, $type, $revenue);
       	$this->manage ($newbiz);

       	public function manage($business){
       		while(true){
       			echo "What would you like to do?\n";
       			echo "1. Hire a new employee\n";
       			echo "2. Gsin a new customer/n";
       			echo "3. Mske money\n";
       			echo  "4. Check business status\n";
       			echo "5.Go home\n";

       			$choice = readline()("enter:");
       			switch ($Choice){
       				case 1:
       				$business->hirenewEmployee();
       				case 2. 
       				$business->gainnewCustomer();
       				case 3:
       				$buiness->MakeMoney();
       				case 4:
       				print_r();
       				case 5:
       				
       			}
       		}
       	}
       }
