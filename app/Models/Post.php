<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Eri Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, at. Repudiandae blanditiis maxime in saepe veritatis. Ducimus tenetur atque corporis officia, quaerat ex eius aliquid animi totam voluptas ea sapiente porro, labore fugit sit laudantium. Eos, maxime reiciendis voluptate at pariatur accusantium illum aut, vitae officiis est, quisquam deleniti quae odit soluta fugit voluptates possimus nemo minus corporis rem omnis! Soluta exercitationem natus in molestiae enim expedita dignissimos fugiat voluptas, iste aspernatur quibusdam dolorum! Tempora ut fugit incidunt voluptatibus facilis!"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Putri Narila",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab blanditiis commodi pariatur, tempore temporibus perferendis accusamus unde ullam quidem quod consequuntur praesentium explicabo veritatis sequi, suscipit repudiandae voluptatibus! Illum sapiente corrupti nostrum facilis architecto ullam recusandae nihil in. Reprehenderit ipsam voluptates aut labore consequatur laudantium magnam est explicabo debitis culpa quisquam, beatae omnis a iure voluptatibus obcaecati officiis aliquam id quia necessitatibus repellendus minima odio fuga! Quia aliquid beatae asperiores est et consequuntur alias quasi illum sint nihil dicta ducimus nesciunt nisi quam fuga odio illo velit sapiente quod provident, animi voluptate. Quos dolor quibusdam maxime error, tempora nemo incidunt."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        $posts = static::all();
        $post = [];
        foreach ($posts as $p) {
            if ($p['slug'] == $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}
