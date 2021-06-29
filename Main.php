<?php
include("Department.php");
include("Company.php");
include("Employe.php");
$department = new Department;
$employe = new Employe;
$company = new Company;

echo "<p>DATA Profile:</br>";
$department->setNama('Departemen 1');
$company->setNamaC("Company 1");
$employe->setNamaE("Nama 1");
$employe->setTitle("title 1");
$employe->setSalary("salary 1");



echo "NAMA DEPARTMENT =".$department->getNama();
echo "<p>Nama Company = ".$company->getNamaC();
echo "<p>Nama Emplole = ".$employe->getNamaE();
echo "<p>Title = ".$employe->getTitle();
echo "<p>salary = ".$employe->getSalary();

?>