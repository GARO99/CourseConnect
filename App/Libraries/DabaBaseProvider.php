<?php
namespace Libraries;

use PDO;
use PDOException;

class DabaBaseProvider{

    private $host= DB_HOST;
    private $port= DB_PORT;
    private $user= DB_USER;
    private $pass= DB_PASS;
    private $db= DB_NAME;
    private $dbh;
    private $stmt;
    private $error;

    public function __construct(){
        $dsn="pgsql:host=". $this->host.";port=".$this->port.";dbname=".$this->db;
        $options = array(PDO::ATTR_PERSISTENT => true,\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION);

        try {
            $this->dbh= new PDO($dsn,$this->user,$this->pass,$options);
        } catch (PDOException $e) {
            $this->error= $e->getMessage();
            throw new PDOException("Error de conexión: " . $this->error);
        }
    }

    public function getquery($query){
        $this->stmt=$this->dbh->prepare($query);
    }

    public function bind($parameter,$value,$type=NULL){
        if (is_null($type)) {
            $type = match(true) {
                is_int($value) => PDO::PARAM_INT,
                is_bool($value) => PDO::PARAM_BOOL,
                is_null($value) => PDO::PARAM_NULL,
                default => PDO::PARAM_STR,
            };
        }
        
        $this->stmt->bindValue($parameter,$value,$type);
    }

    public function execute(){
        try {
            return $this->stmt->execute();
        } catch (PDOException $e) {
            throw new PDOException("Error en la ejecución de la consulta: " . $e->getMessage());
        }
    }

    public function getrows(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getrow(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function rowC(){
        return $this->stmt->rowCount();
    }
  }
?>