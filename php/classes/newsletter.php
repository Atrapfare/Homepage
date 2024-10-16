<?php

$rootPath = dirname($_SERVER["DOCUMENT_ROOT"]);
require_once $rootPath . "/php/settings/settings.php";
require_once $rootPath . "/php/classes/dbConnection.php";


class Newsletter extends dbConnection
{
    private string $email;
    private mixed $connection;

    public function __construct(string $email)
    {
        $this->email = $email;
        $this->connection = parent::__construct();
    }

    public function __destruct()
    {
        $this->connection->close();
    }

    public function addNewsletter(): bool|string
    {
        if ($this->checkMail($this->email) === true) {
            $stmt = $this->connection->prepare("INSERT INTO newsletter (email) VALUES (?)");
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $stmt->close();
            return true;
        } else {
            return false;
        }
    }

    private function checkMail($email): bool
    {
        $stmt = $this->connection->prepare("SELECT email FROM newsletter WHERE newsletter.email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();
        if (isset($row["email"])) {
            return false;
        } else {
            return true;
        }

    }
}


