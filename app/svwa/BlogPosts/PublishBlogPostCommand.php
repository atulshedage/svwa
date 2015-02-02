<?php
namespace svwa\BlogPosts;

class PublishBlogPostCommand {
    public $body;
    public $userId;

    public function __construct($body,$userId)
    {
        $this->body = $body;
        $this->userId = $userId;
    }
}