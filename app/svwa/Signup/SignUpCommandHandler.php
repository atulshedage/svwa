<?php
namespace svwa\Signup;

use Laracasts\Commander\CommandHandler;
use svwa\users\userRepository;
use svwa\users\User;

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