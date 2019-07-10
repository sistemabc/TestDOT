<?php
	class Department{
		public $name;
		
		public function __constructor($name)
 		{
    		$this->name = $name;
  		}

		public function setDepartmentName($name){
			$this->name = $name;
		}
		
		public function getDepartmentName(){
			return $this->name;

		}

		class Departement extends Employee
		{
			
			function __construct(argument)
			{
				# code...
			}
		}

	}
?>