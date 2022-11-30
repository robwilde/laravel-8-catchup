<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Posts
{
    public function __construct(public string $title, public string $excerpt, public string $date, public string $body)
    {
    }

    public static function all(): array
    {
        $files = File::files(resource_path('posts'));

        return array_map(fn($file) => $file->getContents(), $files);
    }

    public static function find($slug)
    {
        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }
    }
}