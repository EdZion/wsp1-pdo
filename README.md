# PHP databasintroduktion

## Filer
Förutom readme så finns det ett antal filer i examples mappen, de utgör grunden för din kod.
Döp om filen dbinfo-example.php till dbinfo.php och lägg till dina egna uppgifter.
Var noga med att få med filen .gitignore i roten så att du inte laddar upp din dbinfo fil.

    examples/
        includes/dbinfo-example.php
        models/TweetModel.php
        views/tweet-list.php
        tweet.php

## Setup
**Databas**
Först med localhost.
WSL - mysql -u username -p

    describe table;
    +------------+------------------+------+-----+---------+----------------+
    | Field      | Type             | Null | Key | Default | Extra          |
    +------------+------------------+------+-----+---------+----------------+
    | id         | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
    | body       | varchar(140)     | NO  |     | NULL    |                |
    | created_at | timestamp        | YES  |     | NULL    |                |
    | updated_at | timestamp        | YES  |     | NULL    |                |
    +------------+------------------+------+-----+---------+----------------+

    create table tweet(id int unsigned auto_increment, body varchar(140) not null, primary key (id)) engine=innodb;

    alter table tweet add created_at timestamp NULL add updated_at timestamp NULL;

För att lägga till data

    insert into tweet (body,created_at,updated_at) values ("Hello world!", now(), now());

För att välja all data

    select * from tweet;

För att välja en specifik rad

    select * from tweet where id = X;

Exportera ditt table.
Nu kan vi testa db servern och importera.

## Länkar

* https://www.php.net/manual/en/book.pdo.php
* https://phptherightway.com/#pdo_extension
* https://www.php.net/manual/en/function.date.php
* https://www.twitter.com