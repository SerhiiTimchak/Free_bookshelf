<?php
namespace config;

use mysqli,Exception;

class DB {

  protected $connection;

  public function __construct() {
    $this->connection = new mysqli('127.0.0.1', 'root', '', 'My_test_db');

    if (!$this->connection) {
      throw new Exception('Could not connect to DB');
    }

  }

  public function query($sql) {
    if (!$this->connection) {
      return FALSE;
    }

    $result = $this->connection->query($sql);
    if (mysqli_error($this->connection)) {
      throw new Exception (mysqli_error($this->connection));
    }

    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }

    mysqli_free_result($result);
    return $data;
  }


  public function escape($str) {
    return mysqli_escape_string($this->connection, $str);
  }

}


