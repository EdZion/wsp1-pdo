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
include 'models/TweetModel.php';

// Create an instance
$tweetModel = new TweetModel($dbh);
// Get the list of Foos
$tweetList = $tweetModel->getAll('tweet');

// Show the view
include 'views/tweet-list.php';