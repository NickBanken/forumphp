<?php
declare(strict_types=1);

$servername = 'mysql';
$dbname = "Forum";
$username = 'root';
$password = 'root';

try{
        
    $db = new PDO("mysql:host=$servername:dbname=$dbname", $username, $password);
    
    $sqlusers = "CREATE TABLE Users(
        Id INT AUTO_INCREMENT PRIMARY KEY,
        Username VARCHAR(30) NOT NULL,
        Avatar varchar(1000) NOT NULL,
        Email VARCHAR(50) NOT NULL,
        UNIQUE(Email, Username))";

    $sqlboards = "CREATE TABLE Boards(
        Id INT AUTO_INCREMENT PRIMARY KEY,
        `Name` varchar(100) NOT NULL,
        `Description` varchar(500),
        Development varchar (50),
        Smalltalk varchar(100),
        events varchar(100) )";

    $sqltopics = "CREATE TABLE Topics(
        Id INT AUTO_INCREMENT PRIMARY KEY,
        Creation_Date DATE,
        Author varchar,
        ID_Board INT(50),
        `State` BIT NULL DEFAULT 0)";

    $sqlmessage = "CREATE TABLE Message(
         Id INT AUTO_INCREMENT PRIMARY KEY,
         Content varchar,
         Author varchar,
         Creation_Date DATE,
         Edition_Date TIMESTAMP)";

    $db -> exec($sqlusers);
    $db -> exec($sqlboards);
    $db -> exec($sqltopics);
    $db -> exec($sqlmessage);

    echo 'Table bien créée !';
}

catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}