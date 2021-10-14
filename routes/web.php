<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Aulia",
        "email" => "aulia@gmail.com",
        "image" => "home alone.jpg"
    ]);
});



Route::get('/posts', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
