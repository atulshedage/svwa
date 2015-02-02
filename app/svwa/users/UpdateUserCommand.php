<?php
namespace svwa\users;

class UpdateUserCommand{
    public $first_name;
    public $last_name;
    public $userId;

    public function __construct($first_name,$last_name,$userId)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->userId = $userId;
    }
}