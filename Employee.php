<?php
	class Employee{
		public $name;
		public $title;
		public $salary;

		public function __constructor($name, $title, $salary)
		{
			$this->name = $name;
			$this->title = $title;
			$this->salary = $salary;
		}
		
		public function setEmployeeName($name){
			$this->name = $name;
		}
		
		public function getEmployeeTitle(){
			return $this->title;
		}
		
		public function getEmployeeProfile(){
			$employeeProfile = "Name : ".$this->name."\nTitle : ".$this->title."\nSalary : ".$this->salary;
			
			return $employeeProfile;
		}
		
		public function getEmployeeMonthlySalary($day){
			$salaryPerDay = $this->salary/30;
			$salary = $salaryPerDay*$day;

			return $salary;
		}
	}
?>