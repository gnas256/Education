<?php

require_once 'app_config.php';

class Connection {

    private $connection;

    public function __construct() {
        $this->connection = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, DATEBASE_NAME);
        if (!$this->connection) {
            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
            $this->connection = NULL;
        }
        mysqli_set_charset($this->connection, "utf8");
    }

    function getConnection() {
        return $this->connection;
    }

    public function closeConnection() {
        if ($this->testConnection()) {
            mysqli_close($this->connection);
        }
    }

    public function testConnection() {
        return !is_null($this->connection);
    }

}
