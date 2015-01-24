<?php

namespace dvwa\users;

class userRepository {

    public function save(User $user)
    {
        return $user->save();
    }
}