<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Deden Wahyudi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ea architecto itaque placeat hic commodi tenetur deleniti unde tempore suscipit molestiae quae, inventore voluptatum fugiat, magnam maiores. Consequatur itaque ut sunt mollitia fugit cumque laborum corporis recusandae totam voluptatem iste nisi rem sed minus distinctio illum, quos perspiciatis quasi eos dolor sit. Voluptas porro dolorem quas ad reiciendis facilis fugit a ea, excepturi at, voluptates rerum qui eligendi, recusandae odit beatae dolore iste. Consectetur non adipisci ipsum odit architecto. Aut?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Intan Sri Mulyani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos provident, quaerat harum ipsa aperiam debitis consectetur in exercitationem? Quasi rerum exercitationem laborum. Soluta, aliquid quo modi itaque maxime molestias inventore assumenda possimus, enim architecto laudantium ab. Perferendis quos excepturi, tempora, vero aliquam voluptates laborum vitae, illum temporibus id odit reprehenderit? Aut nihil numquam quisquam rem alias, similique inventore obcaecati nostrum ratione et quas esse sit, nisi, ipsam ut in hic mollitia debitis animi? Perferendis ad atque necessitatibus quasi iste voluptatibus architecto. Ea reprehenderit enim dolores nihil molestiae quos consectetur sint ratione autem tempora aliquam, aut, quam nam cupiditate culpa voluptatum."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
