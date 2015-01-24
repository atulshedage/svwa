<?php
namespace dvwa\Signup;

class SignUpCommand {

    public $username;
    public $email;
    public $password;

    public function __construct($username,$email,$password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
}