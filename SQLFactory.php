<?php


abstract class SQLFactory
{
    private string $dbConfig;
    protected SQLFactory $dbConnection;

    public function __construct()
    {
        $this->dbConfig = require('dbConfig.php');
        $this->init();
    }

    private function init(){
        //подключение к БД
    }

    public abstract function getDBConnection();
    public abstract function getDBRecord();
    public abstract function queryBuilder();
}

class MySQLFactory extends SQLFactory{

    public function getDBConnection()
    {
        // TODO: Implement getDBConnection() method.
    }

    public function getDBRecord()
    {
        // TODO: Implement getDBRecord() method.
    }

    public function queryBuilder()
    {
        // TODO: Implement queryBuilder() method.
    }
}

class PostgreSQLFactory extends SQLFactory{

    public function getDBConnection()
    {
        // TODO: Implement getDBConnection() method.
    }

    public function getDBRecord()
    {
        // TODO: Implement getDBRecord() method.
    }

    public function queryBuilder()
    {
        // TODO: Implement queryBuilder() method.
    }
}

class OracleFactory extends SQLFactory{

    public function getDBConnection()
    {
        // TODO: Implement getDBConnection() method.
    }

    public function getDBRecord()
    {
        // TODO: Implement getDBRecord() method.
    }

    public function queryBuilder()
    {
        // TODO: Implement queryBuilder() method.
    }
}