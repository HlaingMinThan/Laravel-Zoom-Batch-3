<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Blog
{

    public function __construct(public $title, public $slug, public $intro, public $created_at, public $body)
    {
    }

    public static function all()
    {
        $blogs = File::files(resource_path('/blogs'));
        $blogContents = array_map(function ($blog) {
            $content = $blog->getContents();
            $yaml = YamlFrontMatter::parse($content);

            return new Blog($yaml->title, $yaml->slug, $yaml->intro, $yaml->created_at, $yaml->body());
        }, $blogs); //[blogObj,blogObj]
        return collect($blogContents); //collection
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug); //return null
    }

    public static function findOrFail($slug)
    {
        if (!$blog = static::find($slug)) {
            abort(404);
        }
        return $blog;
    }
}
