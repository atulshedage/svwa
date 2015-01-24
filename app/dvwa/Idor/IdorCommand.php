<?php
namespace dvwa\Idor;

class IdorCommand {
    public $body;
    public $userId;

    public function __construct($body,$userId)
    {
        $this->body = $body;
        $this->userId = $userId;
    }
}