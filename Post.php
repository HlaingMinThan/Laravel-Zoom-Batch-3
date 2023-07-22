<?php

class Post
{

    private $posts = [];

    public function __construct()
    {
    }

    public function save($title)
    {
        $this->posts[] = $title;
    }

    public function get()
    {
        var_dump($this->posts);

        return $this->posts;
    }

    public static function all()
    {
        $post = new static();
        $post->save('1');
        $post->save('2');
        return $post->get();
    }
}

// $post = new Post();

// // $post->save('first post');
// var_dump($post->get());
var_dump(Post::all());
