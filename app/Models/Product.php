<?php

namespace App\Models;
use \PDO;
use \PDOException;

class Product{

    const HOST      =   "localhost";
    const USER      =   "root";
    const PASS      =   "root";
    const DBNAME    =   "teste2";

    private $table;
    private $conn;

    public function __construct( $table = null )
    {
        $this->table            =   $table;
        $this->setConnection();
    }

    public function setConnection(){
        try {
            $this->conn =   new PDO( "mysql:host=".self::HOST.";dbname=".self::DBNAME,self::USER, self::PASS );
            $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }catch( PDOException $exception ){
            die( "Error".$exception->getMessage() );
        }
    }

    public function selectProducts( $name    =   null,  $id = null ){
        // connect to DB teste1
//        $stmt   =   $this->connection->prepare( "SELECT * FROM ".$this->table." WHERE name = :name" );
        $query      =   "SELECT * FROM ".$this->table." WHERE name=:name AND id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam( ":name", $name );
        $stmt->bindParam( ":id", $id );
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $row;
        }
    }
}
//debug
$instanceProduct    =   new Product( 'products' );
echo "<pre>";
print_r( $instanceProduct->selectProducts( 'Miguel', 1 ) );
echo "</pre>";