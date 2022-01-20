<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbh;
    private $error;
    private $stmt;

    public function __construct(){
        // Connect to DB
        $dsn = 'mysql:host='. $this->host .';dbname=' . $this->dbname;

        // Set options 
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // PDO INSTANCE
        try {
            //dbh = database handler
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            print_r( $e );

        }

    }

    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null){
        if(is_null($type)){
            Switch(true){
                case is_int ($value): 
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool ($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null ($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }
    }

    public function execute(){
        return $this->stmt->execute();
    }

    //fetches all and return object
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //fetches and return a single row
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }


}