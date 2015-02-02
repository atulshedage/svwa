<?php

namespace svwa\users;

class userRepository {

    public function save(User $user)
    {
        return $user->save();
    }
}