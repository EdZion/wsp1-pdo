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


// Include model
include 'models/TweetModel.php';

// Create an instance
$tweetModel = new TweetModel($dbh);

// Get a list of all tweets
$tweetList = $tweetModel->getAll('test');

// test
//echo "<pre>", print_r($tweetModel->get('test', 1), 1), "</pre>";

// Show the view
include 'views/tweet-list.php';