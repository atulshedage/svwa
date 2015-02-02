<?php
namespace svwa\BlogPosts;

use Laracasts\Commander\CommandHandler;

class DeleteBlogPostCommandHandler implements CommandHandler {


    public function handle($command)
    {
        $blogPost = Post::find($command->postId);

        $blogPost->delete();

        return $profile;
    }
}