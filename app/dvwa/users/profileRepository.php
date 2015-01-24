<?php

namespace dvwa\users;

use dvwa\users\Profile;
class profileRepository {


    /**
     * @param $userId
     * @return mixed
     */
    public function getUserProfile($userId)
    {
        return Profile::whereUserId($userId)->get();
    }
}