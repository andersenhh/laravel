<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul First Post",
            "slug" => "judul-first-post",
            "author" => "Kireei",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ut nostrum sint ratione soluta beatae dolor sapiente ex a libero! Ex provident tenetur ipsa modi quos sit veniam tempora repudiandae cumque esse? Ducimus, quis optio quod repudiandae nam veritatis culpa sed sit earum delectus exercitationem rerum vel nesciunt itaque quibusdam quaerat? Aliquid amet eum ad dolore repudiandae, aut cumque vel suscipit ut rerum earum, nemo sunt quo explicabo. Vero deserunt nihil voluptate animi repudiandae nobis quo alias esse ipsam optio."
        ],
        [
            "title" => "Judul second Post",
            "slug" => "judul-second-post",
            "author" => "Furina",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae porro eligendi inventore? Deserunt at tempore architecto nulla in placeat cumque voluptatem blanditiis facilis, fugiat a error necessitatibus cum? Repellat rerum at sunt doloremque eveniet? Accusantium, quaerat repudiandae. Totam quos deleniti enim facere amet. Asperiores hic magni odio, id quam voluptatem, quisquam accusantium illo quis earum dolorum nam provident soluta neque aliquid numquam! Fugiat, alias ab? Praesentium cupiditate ipsa perspiciatis asperiores sapiente corrupti! Laudantium voluptas in minus repudiandae suscipit deleniti, delectus expedita accusantium corporis fuga? Id sapiente mollitia voluptatibus repellendus minus, fugit amet, reprehenderit consequuntur magni alias tempore temporibus error laudantium."
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
    