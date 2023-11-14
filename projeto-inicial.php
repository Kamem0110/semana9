<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Pedro Giusti',
    new \DateTimeImmutable('1995-07-30')
);

echo $student->age();
