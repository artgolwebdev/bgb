<?php 
class Database{

public static $host = 'localhost';
public static $db = 'bgb';
public static $username = 'root';
public static $password = '';

private static function connect(){
    $pdo = new PDO('mysql:host='.self::$host.';dbname='.self::$db.';charset=utf8', self::$username, self::$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

public static function query($query, $params = array()){
        $stmt = self::connect()->prepare($query);
        $stmt->execute($params);
        $cmd = explode(' ', $query)[0];
        switch($cmd){
            case 'SELECT':
                $data = $stmt->fetchAll();
                return $data;
            break;
            case 'INSERT':
                $data = self::connect()->lastInsertId();
                return $data;
                break;
        }
    }
}