<?php


class DBController
{
  //Database Connection Properties
  protected $host = 'localhost';
  protected $user = 'root';
  protected $password = '';
  protected $database ="shopping";

  //connection property
  public $con = null;

  //call constructor
  public function__construct()
  {
    $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    if($this->con->connect_error){
      echo "Fail".$this->con->connect_error;
    }
    echo 'connection successful...!';
  }
}

//DBController object
$db = new DBController();