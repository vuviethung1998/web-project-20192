<?php
// Use Singleton design pattern to force a class to have only one instance
class DB
{
    private static $instance = NULL;
    private static $serverName ='127.0.0.1';
    private static $dbName = 'midterm_db';
    private static $username = 'root';
    private static $password = 'root';

    function  __construct()
    {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        try {
          self::$instance = new PDO('mysql:host=' . self::$serverName . ';dbname=' . self::$dbName, self::$username, self::$password);
          self::$instance->exec("SET NAMES 'utf8'");
          self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
          die($ex->getMessage());
        }
      }
      return self::$instance;
    }
}

$ist =  DB::getInstance();