<?php
namespace dvwa\Idor;

use Laracasts\Commander\CommandHandler;
use dvwa\Idor\IdorRepository;
use dvwa\BlogPosts\BlogPost;

class IdorCommandHandler implements CommandHandler {

    protected $IdorRepository;

    public function __construct(IdorRepository $IdorRepository)
    {
        $this->IdorRepository = $IdorRepository;
    }

    public function handle($command)
    {

        $BlogPost = BlogPost::IdorPublishPost($command->body);

        $BlogPost = $this->IdorRepository->save($BlogPost,$command->userId);

        return $BlogPost;
    }
}