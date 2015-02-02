<?php
namespace svwa\BlogPosts;

use Laracasts\Commander\Events\EventGenerator;
use Eloquent;

class BlogPost extends Eloquent{

    protected $fillable = ['body'];

    public static function PublishPost($body)
    {
        $BlogPost = new static(compact('body'));

        return $BlogPost;
    }

    /*
     * Insecure direct object references vulnerability
     */
    public static function PrivPublishPost($body)
    {
        $BlogPost = new static(compact('body'));

        return $BlogPost;
    }
    /*
     * A Blog Posts Belongs to User
     */


    public function user()
    {
        return $this->belongsTo('svwa\users\User');
    }
}