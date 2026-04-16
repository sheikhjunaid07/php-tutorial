<?php

//dsn - data source name
//$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4"; 
// $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}"; 

//using class
class Database {
    public $connection;
    public function __construct($config, $username = "root", $password = "") {  //constructor
     
        $dsn = 'mysql:' . http_build_query($config , "",";");  //predefined method equal to line 4 and line 5

        $this->connection = new PDO($dsn, $username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);  

    }
    public function query($query, $params = []) {

        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}