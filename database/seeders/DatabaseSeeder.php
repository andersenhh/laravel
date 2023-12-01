<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        User::create([
            'name' =>'Edwin',
            'username'=> 'Edwin',
            'email' => 'edwin@gmail.com',
            'password' => bcrypt('edwin123'),
        ]);
       
        // User::create([
        //     'name' =>'Kireei',
        //     'email' => 'kireei@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);



        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing',
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);



        // Post::create([
        //     'title' => 'First Topic',
        //     'slug' => 'first-topic', 
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores nihil consectetur rem officiis deleniti ut? Dolore quo corrupti cupiditate sequi ipsam tempora! Assumenda omnis labore non quasi iste dolorem possimus nesciunt libero necessitatibus voluptatibus,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores nihil consectetur rem officiis deleniti ut? Dolore quo corrupti cupiditate sequi ipsam tempora! Assumenda omnis labore non quasi iste dolorem possimus nesciunt libero necessitatibus voluptatibus, nihil itaque facere dolores laudantium excepturi amet modi! Pariatur expedita et aperiam eligendi rerum eius dicta quod facilis, incidunt assumenda beatae voluptates excepturi ipsum ratione iste natus velit, consequatur officiis ducimus explicabo? Fugiat voluptatem perspiciatis nesciunt quae nostrum, totam libero sint repudiandae, saepe reprehenderit quia maiores sunt nihil iste, dicta voluptates id! Aliquam, temporibus rerum! Earum aliquam, beatae quos hic tenetur repellendus est ducimus blanditiis magnam!',
        //     'category-id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Second Topic',
        //     'slug' => 'second-topic', 
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores nihil consectetur rem officiis deleniti ut? Dolore quo corrupti cupiditate sequi ipsam tempora! Assumenda omnis labore non quasi iste dolorem possimus nesciunt libero necessitatibus voluptatibus,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores nihil consectetur rem officiis deleniti ut? Dolore quo corrupti cupiditate sequi ipsam tempora! Assumenda omnis labore non quasi iste dolorem possimus nesciunt libero necessitatibus voluptatibus, nihil itaque facere dolores laudantium excepturi amet modi! Pariatur expedita et aperiam eligendi rerum eius dicta quod facilis, incidunt assumenda beatae voluptates excepturi ipsum ratione iste natus velit, consequatur officiis ducimus explicabo? Fugiat voluptatem perspiciatis nesciunt quae nostrum, totam libero sint repudiandae, saepe reprehenderit quia maiores sunt nihil iste, dicta voluptates id! Aliquam, temporibus rerum! Earum aliquam, beatae quos hic tenetur repellendus est ducimus blanditiis magnam!',
        //     'category-id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Third Topic',
        //     'slug' => 'third-topic', 
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores nihil consectetur rem officiis deleniti ut? Dolore quo corrupti cupiditate sequi ipsam tempora! Assumenda omnis labore non quasi iste dolorem possimus nesciunt libero necessitatibus voluptatibus,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores nihil consectetur rem officiis deleniti ut? Dolore quo corrupti cupiditate sequi ipsam tempora! Assumenda omnis labore non quasi iste dolorem possimus nesciunt libero necessitatibus voluptatibus, nihil itaque facere dolores laudantium excepturi amet modi! Pariatur expedita et aperiam eligendi rerum eius dicta quod facilis, incidunt assumenda beatae voluptates excepturi ipsum ratione iste natus velit, consequatur officiis ducimus explicabo? Fugiat voluptatem perspiciatis nesciunt quae nostrum, totam libero sint repudiandae, saepe reprehenderit quia maiores sunt nihil iste, dicta voluptates id! Aliquam, temporibus rerum! Earum aliquam, beatae quos hic tenetur repellendus est ducimus blanditiis magnam!',
        //     'category-id' => 2,
        //     'user_id' => 2
        // ]);
    }
}

