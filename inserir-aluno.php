<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);
$student = new Student (null, 'Pedro Giusti', new \DateTimeImmutable('1995-07-30'));
$sqlInsert = "INSERT INTO Students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

//echo $sqlInsert;

var_dump($pdo->exec($sqlInsert));