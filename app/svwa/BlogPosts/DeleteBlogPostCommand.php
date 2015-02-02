<?php
namespace svwa\BlogPosts;

class DeleteBlogPostCommand {
    public $postId;

    public function __construct($postId)
    {
        $this->postId = $postId;
    }
}