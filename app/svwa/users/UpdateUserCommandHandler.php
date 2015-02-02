<?php
namespace svwa\users;

use Laracasts\Commander\CommandHandler;
use svwa\users\profileRepository;
use svwa\users\profile;
class UpdateUserCommandHandler implements CommandHandler{

    protected $profileRepository;

    public function __construct(profileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    /**
     * @param $command
     * @return static
     */
    public function handle($command)
    {
        $profile = User::find($command->userId)->profile;
        $profile->first_name = $command->first_name;
        $profile->last_name = $command->last_name;
        $profile->save();

        return $profile;
    }
}