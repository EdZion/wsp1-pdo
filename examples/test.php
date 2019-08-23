<?php
include_once('includes/dbinfo.php');
try {
    $dbh = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME . '', DBUSER, DBPASS);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

// Read more and see example
// https://phptherightway.com/#pdo_extension


// Make your model available
include 'models/TestModel.php';

// Create an instance
$testModel = new TestModel($dbh);
// Get the list of Foos
$testList = $testModel->getAll('test');

// Show the view
include 'views/test-list.php';