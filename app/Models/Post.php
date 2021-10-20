<?php

namespace App\Models;

class Post
{
    static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aulia",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis sapiente blanditiis libero eos nihil quos esse explicabo dolor consequuntur, possimus, tempore architecto cupiditate ut fugit repellendus saepe maiores vel similique, suscipit facilis excepturi reprehenderit obcaecati? Nesciunt voluptatibus sint saepe in velit incidunt odit cupiditate ut. Possimus quibusdam porro exercitationem ipsa, atque placeat vero optio id alias veniam? Asperiores sint consequatur velit blanditiis doloribus sequi ex voluptatum, assumenda facilis. Fugit facere quas tempore modi praesentium, nostrum at, mollitia placeat, labore quo qui quibusdam totam pariatur perspiciatis iure provident saepe fugiat vel."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nada",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, dolorum saepe enim magni itaque neque commodi sapiente quidem suscipit facilis soluta debitis. Quibusdam aspernatur sit aut maiores? Distinctio necessitatibus libero asperiores assumenda dicta excepturi amet placeat harum. Doloribus libero nihil, optio tenetur fugit autem officiis quam aliquam ullam vitae maiores sapiente rerum iure unde molestiae cum voluptates! Vitae consequuntur nihil eveniet esse sunt, id dolorem, officiis, iusto dolor quisquam corporis rerum commodi labore nostrum nam ab. Veritatis rerum suscipit provident, minima impedit officia eius ratione perferendis nulla quia hic ipsam esse quibusdam quasi commodi corrupti nam alias veniam. Soluta, earum unde."
        ]

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $blog_posts = static::all();
        // $post = [];
        // foreach ($blog_posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $blog_posts->firstWhere('slug', $slug);
    }
}
