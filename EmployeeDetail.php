<?php
	include "Company.php";
	include "Department.php";
	include "Employee.php";
	$company = new Company("DOT");
	$department = new Department("QA Division"); 
	$employee = new Employee("Arsy","Junior QA", 5000000);

	class EmployeeDetail{
		public function getEmployeeDetail(){
			$employeeDetail = $this->employee->getEmployeeProfile()."
			\nSalary : ".$this->employee->getEmployeeMonthlySalary(30)."\n
			Company : ".$this->company->getCompanyName()."\n
			Department : ".$this->department->getDepartmentName();

			echo $employeeDetail;
		}
	}

	$employeeDetail = new EmployeeDetail();
	$employeeDetail->getEmployeeDetail();
?>