<?php

class HelloWorld
{
    /**
     * @var PDOftt
     */
    private $pdo;gyyj
ds
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
//comment
    public function hello($what = 'World')
    {
        $sql = "INSERT INTO hello VALUES (" . $this->pdo->quote($what) . ")"; ///hello
        $this->pdo->query($sql);
        return "Hello $what";
    }


    public function what()
    {
        $sql = "SELECT what FROM hello";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchColumn();
    }
}
