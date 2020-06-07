<?php
class DB
{
    private static $instance = NULL;
    private static $serverName = "172.27.0.1";
    private static $dbName = "web_programming_project_20192";
    private static $username = "root";
    private static $password = "root";

    public static function getInstance() {
      if (!isset(self::$instance)) {
        try {
          self::$instance = new PDO('mysql:host=' . self::$serverName . ';dbname=' . self::$dbName, self::$username, self::$password);
          self::$instance->exec("SET NAMES 'utf8'");
          self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
          print($ex);
          die($ex->getMessage());
        }
      }

      return self::$instance;
    }
}