<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Deden Wahyudi',
            'username' => 'dedenwahyudi',
            'email' => 'id.dedenwahyudi@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Intan Sri Mulyani',
        //     'email' => 'intansm30@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus maxime tempora alias, inventore sit tenetur dolores, et doloremque commodi exercitationem soluta dicta.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus maxime tempora alias, inventore sit tenetur dolores, et doloremque commodi exercitationem soluta dicta. Magnam sit cupiditate temporibus earum impedit quod vero tempora eum, odio natus corrupti libero doloremque dolore sapiente commodi perferendis et. Sapiente quibusdam voluptatum debitis nesciunt. Voluptate inventore dignissimos dolor debitis eos asperiores! Sunt qui ullam iusto velit beatae at et ab nobis? Obcaecati, omnis nisi optio soluta eligendi consequuntur quis ipsum enim laboriosam dicta? Voluptate accusamus non recusandae est consectetur ullam possimus, mollitia doloribus dignissimos sit distinctio enim, iste alias? Assumenda dolore labore, ipsa autem distinctio iure nostrum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus maxime tempora alias, inventore sit tenetur dolores, et doloremque commodi exercitationem soluta dicta.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus maxime tempora alias, inventore sit tenetur dolores, et doloremque commodi exercitationem soluta dicta. Magnam sit cupiditate temporibus earum impedit quod vero tempora eum, odio natus corrupti libero doloremque dolore sapiente commodi perferendis et. Sapiente quibusdam voluptatum debitis nesciunt. Voluptate inventore dignissimos dolor debitis eos asperiores! Sunt qui ullam iusto velit beatae at et ab nobis? Obcaecati, omnis nisi optio soluta eligendi consequuntur quis ipsum enim laboriosam dicta? Voluptate accusamus non recusandae est consectetur ullam possimus, mollitia doloribus dignissimos sit distinctio enim, iste alias? Assumenda dolore labore, ipsa autem distinctio iure nostrum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus maxime tempora alias, inventore sit tenetur dolores, et doloremque commodi exercitationem soluta dicta.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus maxime tempora alias, inventore sit tenetur dolores, et doloremque commodi exercitationem soluta dicta. Magnam sit cupiditate temporibus earum impedit quod vero tempora eum, odio natus corrupti libero doloremque dolore sapiente commodi perferendis et. Sapiente quibusdam voluptatum debitis nesciunt. Voluptate inventore dignissimos dolor debitis eos asperiores! Sunt qui ullam iusto velit beatae at et ab nobis? Obcaecati, omnis nisi optio soluta eligendi consequuntur quis ipsum enim laboriosam dicta? Voluptate accusamus non recusandae est consectetur ullam possimus, mollitia doloribus dignissimos sit distinctio enim, iste alias? Assumenda dolore labore, ipsa autem distinctio iure nostrum.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus maxime tempora alias, inventore sit tenetur dolores, et doloremque commodi exercitationem soluta dicta.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus maxime tempora alias, inventore sit tenetur dolores, et doloremque commodi exercitationem soluta dicta. Magnam sit cupiditate temporibus earum impedit quod vero tempora eum, odio natus corrupti libero doloremque dolore sapiente commodi perferendis et. Sapiente quibusdam voluptatum debitis nesciunt. Voluptate inventore dignissimos dolor debitis eos asperiores! Sunt qui ullam iusto velit beatae at et ab nobis? Obcaecati, omnis nisi optio soluta eligendi consequuntur quis ipsum enim laboriosam dicta? Voluptate accusamus non recusandae est consectetur ullam possimus, mollitia doloribus dignissimos sit distinctio enim, iste alias? Assumenda dolore labore, ipsa autem distinctio iure nostrum.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
