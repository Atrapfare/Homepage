<?php

$rootPath = dirname($_SERVER["DOCUMENT_ROOT"]);
require_once $rootPath . "/php/settings/settings.php";

class dbConnection
{
    private mixed $connection;

    public function __construct()
    {
        return $this->connect();
    }

    private function connect(): mixed
    {
        $dbCredentials = parse_ini_file(dirname($_SERVER["DOCUMENT_ROOT"]) . "/php/config/db.ini");
        $this->connection = new mysqli($dbCredentials["servername"], $dbCredentials["username"], $dbCredentials["password"], $dbCredentials["dbname"]);
        $this->connection->set_charset('utf8mb4');
        return $this->connection;
    }

    protected function close(): void
    {
        $this->connection->close();
    }
}