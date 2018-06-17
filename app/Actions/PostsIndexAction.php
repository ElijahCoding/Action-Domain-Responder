<?php

namespace App\Actions;
use App\Responders\PostIndexResponder;

class PostsIndexAction
{
  protected $responder;

  public function __construct(PostIndexResponder $responder)
  {
    $this->responder = $responder;
  }

  public function __invoke()
  {
    $posts = [
      'id' => 1,
      'name' => 'Elijah'
    ];

    return $this->responder->send($posts);
  }
}
