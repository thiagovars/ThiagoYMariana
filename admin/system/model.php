<?php

require_once('application/config/config.php');

class Model {

	private $connection;

	private $host = DB_HOST;
  private $dbName = DB_NAME;
  private $user = DB_USER;
  private $pass = DB_PASS;
  
  private $error;
  private $qError;
  
  private $stmt;
  
	public function __construct()
	{
		global $config;
		$dsn = "mysql:host=".$this->host.";dbname=".$this->dbName;
    $options = array(
        PDO::ATTR_PERSISTENT    => true,
        PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
    
    try{
        $this->connection = new PDO($dsn, $this->user, $this->pass, $options);
    }
    //catch any errors
    catch (PDOException $e){
        $this->error = $e->getMessage();
    }	
		// $this->connection = mysql_pconnect($config['db_host'], $config['db_username'], $config['db_password']) or die('MySQL Error: '. mysql_error());
		// mysql_select_db($config['db_name'], $this->connection);
	}

	public function escapeString($string)
	{
		return $this->connection->quote($string);
	}

	//disabled for now
	public function escapeArray($array)
	{
	    // array_walk_recursive($array, create_function('&$v', '$v = mysql_real_escape_string($v);'));
		// return $array;
	}
	
	public function to_bool($val)
	{
	    return !!$val;
	}
	
	public function to_date($val)
	{
	    return date('Y-m-d', $val);
	}
	
	public function to_time($val)
	{
	    return date('H:i:s', $val);
	}
	
	public function to_datetime($val)
	{
	    return date('Y-m-d H:i:s', $val);
	}
	
	public function query($query)
	{
		$this->stmt = $this->connection->prepare($query);
		// $result = mysql_query($qry) or die('MySQL Error: '. mysql_error());
		// $resultObjects = array();

		// while($row = mysql_fetch_object($result)) $resultObjects[] = $row;

		// return $resultObjects;
	}

	public function bind($param, $value, $type = null){
      if(is_null($type)){
          switch (true){
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
    $this->stmt->bindValue($param, $value, $type);
  }

  // method updated to php7
	// public function execute($qry)
	// {
	// 	$exec = mysql_query($qry) or die('MySQL Error: '. mysql_error());
	// 	return $exec;
	// }

	public function execute(){
      return $this->stmt->execute();
      
      $this->qError = $this->connectino->errorInfo();
        if(!is_null($this->qError[2])){
	        echo $this->qError[2];
        }
        echo 'done with query';
  }
  
  public function resultset(){
      $this->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  
  public function single(){
      $this->execute();
      return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }
  
  public function rowCount(){
      return $this->stmt->rowCount();
  }
  
  public function lastInsertId(){
      return $this->connectino->lastInsertId();
  }
  
  public function beginTransaction(){
      return $this->connectino->beginTransaction();
  }
  
  public function endTransaction(){
      return $this->connectino->commit();
  }
  
  public function cancelTransaction(){
      return $this->connectino->rollBack();
  }
  
  public function debugDumpParams(){
      return $this->stmt->debugDumpParams();
  }
  
  public function queryError(){
      $this->qError = $this->connectino->errorInfo();
      if(!is_null($qError[2])){
          echo $qError[2];
      }
  }
    
}
?>
