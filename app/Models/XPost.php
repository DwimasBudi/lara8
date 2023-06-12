<?php

namespace App\Models;

class XPost{
    private static $blog_post = [
        [
            'title' => 'Judul post pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Dwimas Budi Sulistyo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quibusdam earum aspernatur sunt libero, natus aut et commodi minus consectetur porro impedit odit! Vel culpa iure dolor eveniet neque esse aperiam eos, unde temporibus delectus minus nostrum sed. Deserunt a adipisci veritatis similique dolorum eligendi consequuntur perspiciatis illo, nihil, dignissimos nobis recusandae nesciunt. Assumenda vero aut doloribus ullam sequi vel repellat perferendis, obcaecati commodi iusto maxime nesciunt, porro reiciendis dicta atque ab explicabo tempora debitis quia. Sed quibusdam natus quo.'
        ],
        [
            'title' => 'Judul post kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Dodi Sudrajat',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem illo libero saepe assumenda repudiandae. Nam tenetur mollitia quasi optio iusto distinctio, cupiditate earum vitae ratione doloremque laborum fuga aliquam eveniet, dolores obcaecati ullam modi. Non, recusandae esse maxime necessitatibus voluptatibus eum laboriosam illo veniam debitis dolorum sapiente aliquam iste repudiandae, neque, odio molestiae et itaque provident? Aliquam vel asperiores pariatur explicabo quo! Consequatur fuga facere aperiam? Beatae omnis reiciendis delectus expedita repellat assumenda eaque harum dolorem debitis esse illum totam asperiores, placeat illo deleniti perferendis inventore quisquam suscipit rem iusto laborum enim dolor porro. Dolores, nemo. Possimus omnis quo et!'
        ]
        ];
        public static function all(){
            return collect(self::$blog_post);
        }
        public static function find($slug){
         $posts =static::all();
         //Magic laravel collection
         return $posts->firstWhere('slug',$slug);
        }
}
