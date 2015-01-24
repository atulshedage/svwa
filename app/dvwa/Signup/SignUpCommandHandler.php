<?php
namespace dvwa\Signup;

use Laracasts\Commander\CommandHandler;
use dvwa\users\userRepository;
use dvwa\users\User;

class SignUpCommandHandler implements CommandHandler{

    protected $userRepository;

    public function __construct(userRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function handle($command){
        $user = User::signup(
            $command->username,
            $command->email,
            $command->password);

        $this->userRepository->save($user);

        return $user;
    }
}