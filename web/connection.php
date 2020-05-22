<?php
class DB
{
    private static $instance = NULl;
    private static $serverName = "remotemysql.com";
    private static $dbName = "VTwLrpQaXa";
    private static $username = "VTwLrpQaXa";
    private static $password = "JDtdqbnQVl";

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