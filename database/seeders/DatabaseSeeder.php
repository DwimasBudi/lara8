<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create(['name' => 'Dwimas Budi Sulistyo',
                      'username' => 'dwimasbudi',
                      'role' => 'admin',
                        'email'=>'dwimasbudi@gmail.com', 
                      'password' => bcrypt('password')]);
        // User::create([
        //     'name' => 'Dodi Sudrajat',
        //     'email' => 'dodi@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        Category::create(['name' => 'Programing', 
                          'slug' => 'programing']);
        Category::create([
            'name' => 'Desain grafis',
            'slug' => 'desain-grafis'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        User::factory(3)->create();
        Post::factory(100)->create();



        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eligendi doloribus deserunt ipsa inventore amet estoptio! Eligendi rerum eius labore eos assumenda doloribus nulla quae perferendis',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat ex porro, voluptate reiciendis eum quia aspernatur illum suscipit cum adipisci magni ab assumenda nesciunt, hic iste officiis quisquam sequi earum consequuntur tenetur vero possimus ea laboriosam eos! Omnis, iure dolore magnam dignissimos dicta labore provident cumque hic voluptas aliquid obcaecati vero sed ullam sint odio rem, architecto laudantium non. Sed nihil consequatur alias pariatur maiores molestiae esse. Atque in odio sequi magnam reprehenderit! Ipsam veritatis aut, eum asperiores maiores facilis. Placeat doloremque quibusdam maiores perferendis, commodi velit aut deserunt in impedit beatae cupiditate voluptatum earum dolorem autem assumenda. Alias aperiam, eius repellat omnis ipsum ratione fugit. Minus, dolores nam! Delectus reiciendis non perspiciatis deserunt harum soluta, fuga nostrum ipsa magnam quis ullam velit nihil sed! Quis temporibus ullam, quam, officiis atque quaerat nesciunt dolore molestiae sequi omnis corrupti repudiandae eveniet praesentium obcaecati maiores ipsum eius voluptatem. Laudantium voluptatem assumenda maxime!</p>',
        //     'category_id'=>'1',
        //     'user_id'=>'1'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eligendi doloribus deserunt ipsa inventore amet estoptio! Eligendi rerum eius labore eos assumenda doloribus nulla quae perferendis',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat ex porro, voluptate reiciendis eum quia aspernatur illum suscipit cum adipisci magni ab assumenda nesciunt, hic iste officiis quisquam sequi earum consequuntur tenetur vero possimus ea laboriosam eos! Omnis, iure dolore magnam dignissimos dicta labore provident cumque hic voluptas aliquid obcaecati vero sed ullam sint odio rem, architecto laudantium non. Sed nihil consequatur alias pariatur maiores molestiae esse. Atque in odio sequi magnam reprehenderit! Ipsam veritatis aut, eum asperiores maiores facilis. Placeat doloremque quibusdam maiores perferendis, commodi velit aut deserunt in impedit beatae cupiditate voluptatum earum dolorem autem assumenda. Alias aperiam, eius repellat omnis ipsum ratione fugit. Minus, dolores nam! Delectus reiciendis non perspiciatis deserunt harum soluta, fuga nostrum ipsa magnam quis ullam velit nihil sed! Quis temporibus ullam, quam, officiis atque quaerat nesciunt dolore molestiae sequi omnis corrupti repudiandae eveniet praesentium obcaecati maiores ipsum eius voluptatem. Laudantium voluptatem assumenda maxime!</p>',
        //     'category_id' => '1',
        //     'user_id' => '1'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eligendi doloribus deserunt ipsa inventore amet estoptio! Eligendi rerum eius labore eos assumenda doloribus nulla quae perferendis',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat ex porro, voluptate reiciendis eum quia aspernatur illum suscipit cum adipisci magni ab assumenda nesciunt, hic iste officiis quisquam sequi earum consequuntur tenetur vero possimus ea laboriosam eos! Omnis, iure dolore magnam dignissimos dicta labore provident cumque hic voluptas aliquid obcaecati vero sed ullam sint odio rem, architecto laudantium non. Sed nihil consequatur alias pariatur maiores molestiae esse. Atque in odio sequi magnam reprehenderit! Ipsam veritatis aut, eum asperiores maiores facilis. Placeat doloremque quibusdam maiores perferendis, commodi velit aut deserunt in impedit beatae cupiditate voluptatum earum dolorem autem assumenda. Alias aperiam, eius repellat omnis ipsum ratione fugit. Minus, dolores nam! Delectus reiciendis non perspiciatis deserunt harum soluta, fuga nostrum ipsa magnam quis ullam velit nihil sed! Quis temporibus ullam, quam, officiis atque quaerat nesciunt dolore molestiae sequi omnis corrupti repudiandae eveniet praesentium obcaecati maiores ipsum eius voluptatem. Laudantium voluptatem assumenda maxime!</p>',
        //     'category_id' => '2',
        //     'user_id' => '1'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eligendi doloribus deserunt ipsa inventore amet estoptio! Eligendi rerum eius labore eos assumenda doloribus nulla quae perferendis',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat ex porro, voluptate reiciendis eum quia aspernatur illum suscipit cum adipisci magni ab assumenda nesciunt, hic iste officiis quisquam sequi earum consequuntur tenetur vero possimus ea laboriosam eos! Omnis, iure dolore magnam dignissimos dicta labore provident cumque hic voluptas aliquid obcaecati vero sed ullam sint odio rem, architecto laudantium non. Sed nihil consequatur alias pariatur maiores molestiae esse. Atque in odio sequi magnam reprehenderit! Ipsam veritatis aut, eum asperiores maiores facilis. Placeat doloremque quibusdam maiores perferendis, commodi velit aut deserunt in impedit beatae cupiditate voluptatum earum dolorem autem assumenda. Alias aperiam, eius repellat omnis ipsum ratione fugit. Minus, dolores nam! Delectus reiciendis non perspiciatis deserunt harum soluta, fuga nostrum ipsa magnam quis ullam velit nihil sed! Quis temporibus ullam, quam, officiis atque quaerat nesciunt dolore molestiae sequi omnis corrupti repudiandae eveniet praesentium obcaecati maiores ipsum eius voluptatem. Laudantium voluptatem assumenda maxime!</p>',
        //     'category_id' => '3',
        //     'user_id' => '1'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Lima',
        //     'slug' => 'judul-ke-lima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eligendi doloribus deserunt ipsa inventore amet estoptio! Eligendi rerum eius labore eos assumenda doloribus nulla quae perferendis',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat ex porro, voluptate reiciendis eum quia aspernatur illum suscipit cum adipisci magni ab assumenda nesciunt, hic iste officiis quisquam sequi earum consequuntur tenetur vero possimus ea laboriosam eos! Omnis, iure dolore magnam dignissimos dicta labore provident cumque hic voluptas aliquid obcaecati vero sed ullam sint odio rem, architecto laudantium non. Sed nihil consequatur alias pariatur maiores molestiae esse. Atque in odio sequi magnam reprehenderit! Ipsam veritatis aut, eum asperiores maiores facilis. Placeat doloremque quibusdam maiores perferendis, commodi velit aut deserunt in impedit beatae cupiditate voluptatum earum dolorem autem assumenda. Alias aperiam, eius repellat omnis ipsum ratione fugit. Minus, dolores nam! Delectus reiciendis non perspiciatis deserunt harum soluta, fuga nostrum ipsa magnam quis ullam velit nihil sed! Quis temporibus ullam, quam, officiis atque quaerat nesciunt dolore molestiae sequi omnis corrupti repudiandae eveniet praesentium obcaecati maiores ipsum eius voluptatem. Laudantium voluptatem assumenda maxime!</p>',
        //     'category_id' => '2',
        //     'user_id' => '2'
        // ]);



    }

}
