<?php
	class Company{
		public $name;

		public function __constructor($name)
	  	{
	  		$this->name = $name;
	  	}
		
		public function setCompanyName($name){
			$this->name = $name;
		}
		
		public function getCompanyName(){
			return $this->name;
		}
	}
?>