<?php

namespace App\Actions;
use App\Responders\PostIndexResponder;
use App\Domain\Services\PostIndexService;

class PostsIndexAction
{
  protected $responder;
  protected $service;

  public function __construct(PostIndexResponder $responder, PostIndexService $service)
  {
    $this->responder = $responder;
    $this->service = $service;
  }

  public function __invoke()
  {
    $posts = $this->service->handle();

    return $this->responder->send($posts);
  }
}
