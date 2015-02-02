<?php

namespace svwa\Priv;

use svwa\BlogPosts\BlogPost;
use svwa\users\User;
class PrivRepository {

    public function save(BlogPost $BlogPost,$userId)
    {
        return User::findorFail($userId)->blogPosts()->save($BlogPost);
    }

}