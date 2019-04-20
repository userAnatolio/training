<?php
require_once('User.php');
require_once('Student.php');
require_once('Employee.php');

$employee = new Employee;
$student = new Student;

$employee -> setName('Николай');
$employee -> setEmployee(10000);
$student -> setName('Алексей');
$student -> setScholarship(1000);

echo $employee -> getName() . '<br>';
echo $employee -> getEmployee() . '<br>';
echo $student -> getName() . '<br>';
echo $student -> getScholarship() . '<br>';

$employee -> increaseRevenue(200);
$student -> increaseRevenue(300);

echo '<br>';

echo $employee -> getEmployee() . '<br>';
echo $student -> getScholarship() . '<br>';

$employee -> decreaseRevenue(200);
$student -> decreaseRevenue(300);

echo '<br>';

echo $employee -> getEmployee() . '<br>';
echo $student -> getScholarship() . '<br>';

?>