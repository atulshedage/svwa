<?php
namespace svwa\Priv;

class PrivCommand {
    public $body;
    public $userId;

    public function __construct($body,$userId)
    {
        $this->body = $body;
        $this->userId = $userId;
    }
}