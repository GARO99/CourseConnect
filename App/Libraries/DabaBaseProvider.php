<?php
namespace Libraries;

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
        $dsn="mysql:host=". $this->host.";port=".$this->port.";dbname=".$this->db;
        $options = array(\PDO::ATTR_PERSISTENT => true,\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION);

        try {
            $this->dbh= new \PDO($dsn,$this->user,$this->pass,$options);
            $this->dbh->exec("set names utf8");
        } catch (\PDOException $e) {
            $this->error= $e->getMessage();
            echo $this->error;
        }
    }

    public function getquery($query){
        $this->stmt=$this->dbh->prepare($query);
    }

    public function bind($parameter,$value,$type=NULL){
        if (is_null($type)) {
            switch (TRUE) {
                case is_int($value):
                    $type = \PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = \PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = \PDO::PARAM_NULL;
                    break;
            default:
                $type = \PDO::PARAM_STR;
                break;
            }
        }
        $this->stmt->bindValue($parameter,$value,$type);
    }

    public function execute(){
        return $this->stmt->execute();
    }

    public function getrows(){
        $this->execute();
        return $this->stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getrow(){
        $this->execute();
        return $this->stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function rowC(){
        return $this->stmt->rowCount();
    }
  }
  

?>