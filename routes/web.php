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
        "name" => "Intan Sri Mulyani",
        "email" => "id.dedenwahyudi@gmail.com",
        "image" => "profile.png"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
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
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
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
        ],
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
