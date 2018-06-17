<?php

namespace App\Domain\Services;

use App\Domain\Models\Post;

class PostIndexService
{
  public function handle()
  {
    return Post::get()->toArray();
  }
}
