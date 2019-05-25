<?php

class Databases{
public static  $db;
public static function  get_db(){
    try {
        $conn = new PDO("mysql:host=localhost;port=3307;dbname=phppoo","root",'');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db=$conn;
        return self::$db; // ou $this->db
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
}


}