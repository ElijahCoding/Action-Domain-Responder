<?php

use App\Actions\PostsIndexAction;
use App\Responders\PostIndexResponder;

$container[PostsIndexAction::class] = function ($container) {
  return new PostsIndexAction(
    new PostIndexResponder($container->response)
  );
};

$app->get('/', PostsIndexAction::class);
