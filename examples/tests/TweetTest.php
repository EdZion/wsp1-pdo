<?php

use PHPUnit\Framework\TestCase;

class TweetTest extends TestCase
{
    private $dbh;

    protected function setUp() : void
    {
        include_once('includes/dbinfo.php');
        try {
            $this->dbh = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME . '', DBUSER, DBPASS);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    /** @test **/
    public function the_model_should_return_tweets()
    {
        $tweetModel = new TweetModel($this->dbh);
        $tweetList = $tweetModel->get('tweet', 1);

        // sad test, we need a way to assert that the row with id 1 contains string x
        $this->assertStringContainsString(
            'Hello world!',
            $tweetList['body']
        );
    }

}