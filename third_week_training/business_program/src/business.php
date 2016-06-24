<?php


abstract class PaintingBusiness {
private $name, $type, $sales;
private $employees = [];
privatr $customers = [];

 public function __construct($name, $type, $revenue)
 {
 	$this->name = $name;
 	$this->type = $type;
    $this
 } 
		
		public function getSales(){
			return $this->sales;
		}
		public function setSales($sales){
			$this->sales = $sales;
		}

   