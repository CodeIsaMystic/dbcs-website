<?php
  /*
   * PDO Database Class
   * Connect to database
   * Create prepared statements
   * Bind values
   * Return rows and results
   */
  class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $dbHandler;
    private $statement;
    private $error;

    public function __construct(){
      // Set DSN
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname .';charset=utf8';
      $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );

      // Create PDO instance
      try{
        $this->dbHandler = new PDO($dsn, $this->user, $this->pass, $options);
      } catch(PDOException $err){
        $this->error = $err->getMessage();
        echo $this->error;
      }
    }

    // Prepare statement with query
    public function query($sql) {
      $this->statement = $this->dbHandler->prepare($sql);
    }

    // Bind Values
    public function bind($param, $value, $type = null) {
      if(is_null($type)) {
        switch(true) {
          case is_int($value):
            $type = PDO::PARAM_INT;
            break;
          case is_bool($value):
            $type = PDO::PARAM_BOOL;
            break;
          case is_null($value):
            $type = PDO::PARAM_NULL;
            break;
          default:
            $type = PDO::PARAM_STR;
        }
      }

      $this->statement->bindValue($param, $value, $type);
    }

    // Execute the prepared statement
    public function execute() {
      return $this->statement->execute(); 
    }

    // Get Results  set as Array of objects
    public function resultSet() {
      $this->execute();

      return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    // Get a single  record as an object
    public function single() {
      $this->execute();

      return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    // Get a Row count
    public function rowCount() {
      return $this->statement->rowCount();
    }
  }