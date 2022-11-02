<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-posts-pertama",
            "author" => "Agielll",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quam, totam necessitatibus ex facilis fugit illo quis officia iusto optio aut corrupti mollitia quidem repudiandae eveniet error ut. Nulla, repellendus."
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-posts-kedua",
            "author" => "Kamu Siapa?",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit itaque corporis nam unde necessitatibus, molestias, harum repellat officiis voluptates saepe laboriosam provident a pariatur nostrum dolorum, voluptas praesentium similique perferendis sit nulla quaerat sunt! Optio cumque obcaecati quasi maiores enim perspiciatis nam recusandae eos pariatur incidunt tempore debitis illum, nostrum, magnam qui molestias soluta hic, facere aliquid provident earum. Officiis, ipsa. Nulla, cum sequi. Porro officia ipsa sed voluptates libero itaque pariatur sapiente iure incidunt tempore quae doloribus optio facilis dolore, vel necessitatibus omnis unde quos dignissimos. Veniam optio obcaecati sit rerum atque voluptate repellendus odio veritatis aperiam? Itaque, praesentium?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}
