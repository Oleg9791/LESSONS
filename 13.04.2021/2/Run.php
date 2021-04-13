<?php
include "Person.php";
include 'Worker.php';
include 'Student.php';
include 'Engineer.php';

$worker = new Worker("Alex", 20);
echo $worker->say() . "<br>";
echo $worker->doJob();

echo "<br>";

$student = new Student("Oleg", 18);
echo $student->say() . "<br>";
echo $student->doJob() . "<br>";

$engineer = new Engineer("Tomas", 28);
echo $engineer->say() . "<br>";
echo $engineer->doJob();
