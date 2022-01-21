<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "post 1",
            "slug" => "post-1-post",
            "author" => "author post 1 oda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni atque repel lat ut, suscipit natus recusandae nihil ipsa officiis maiores neque optio animi dolores fugiat harum impedit ea, reiciendis dolorum maxime?"
        ],
        [
            "title" => "post 2.1",
            "slug" => "post-2-post",
            "author" => "author post 2 ngabes",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni atque repellat ut, suscipit natus recusandae nihil ipsa officiis maiores neque optio animi dolores fugiat harum impedit ea, reiciendis dolorum maxime?"
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}