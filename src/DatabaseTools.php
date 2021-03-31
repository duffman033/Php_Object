<?php
namespace App;

use PDO;

class DatabaseTools
{

    private $dsn ='mysql:dbname=jvideo;host=localhost';
    private $user = 'root';
    private $password = 'root';
    private PDO $pdo;

    public function init(){
        $this->pdo=new PDO($this->dsn,$this->user,$this->password);
    }

    /**
     * @return PDO
     */
    public function getPdo(): PDO
    {
        return $this->pdo;
    }

    public function execSqlQuery(string $sql, $datas = null){
        $stmt = $this->pdo->prepare($sql);
        if($datas){
            foreach ($datas as $data){
                $stmt->bindParam($data['key'],$data['value']);
            }
        }

        $stmt->execute();
        return $stmt->fetchAll();
    }

}