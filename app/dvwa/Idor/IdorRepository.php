<?php

namespace dvwa\Idor;

use dvwa\BlogPosts\BlogPost;
use dvwa\users\User;
class IdorRepository {

    public function save(BlogPost $BlogPost,$userId)
    {
        return User::findorFail($userId)->blogPosts()->save($BlogPost);
    }

}