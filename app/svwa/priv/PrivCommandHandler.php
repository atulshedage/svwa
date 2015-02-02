<?php
namespace svwa\Priv;

use Laracasts\Commander\CommandHandler;
use svwa\Priv\PrivRepository;
use svwa\BlogPosts\BlogPost;

class PrivCommandHandler implements CommandHandler {

    protected $PrivRepository;

    public function __construct(PrivRepository $PrivRepository)
    {
        $this->PrivRepository = $PrivRepository;
    }

    public function handle($command)
    {

        $BlogPost = BlogPost::PrivPublishPost($command->body);

        $BlogPost = $this->PrivRepository->save($BlogPost,$command->userId);

        return $BlogPost;
    }
}