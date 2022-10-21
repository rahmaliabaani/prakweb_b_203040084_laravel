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
        "name" => "Rahmalia Nuursyabaani",
        "email" => "203040084@mail.unpas.ac.id",
        "image" => "foto.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            
            "title" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Rahmalia Nuursyabaani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perspiciatis dicta mollitia reiciendis beatae, nemo laborum cupiditate totam at? At eius quos officiis excepturi voluptas assumenda suscipit non dolores, vero, ad recusandae distinctio illum. Voluptates, distinctio dolor, pariatur ut quod laborum doloremque temporibus reprehenderit ipsa deserunt iusto excepturi numquam soluta quia alias accusamus laudantium corrupti! Repellendus est repudiandae rem laudantium harum! Velit incidunt doloremque quasi corrupti pariatur a, provident tempore error ullam et fuga repellendus ipsam ipsum totam esse. Accusantium"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul Post Kedua",
            "author" => "Bunga Fajrin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ipsum, voluptatum error repellendus maxime quam hic voluptates temporibus, nam dolorem assumenda doloremque. Distinctio omnis cupiditate ad sit quasi nulla minus deleniti sed quae. Necessitatibus omnis ut libero illo eaque impedit hic repudiandae perferendis, corrupti ullam expedita, itaque sed quis dolore, rerum nobis ducimus consectetur. Blanditiis, fugiat! Aliquam eum accusantium amet officiis! Asperiores amet, natus odio quo doloribus cum culpa corporis adipisci beatae dolorem molestiae reprehenderit illum, quaerat in deserunt dolores eaque voluptates id numquam. Non odit eligendi nam atque, natus voluptate nobis magni porro, aut voluptatibus inventore ducimus eum ex"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//single posts
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            
            "title" => "Judul Post Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Rahmalia Nuursyabaani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perspiciatis dicta mollitia reiciendis beatae, nemo laborum cupiditate totam at? At eius quos officiis excepturi voluptas assumenda suscipit non dolores, vero, ad recusandae distinctio illum. Voluptates, distinctio dolor, pariatur ut quod laborum doloremque temporibus reprehenderit ipsa deserunt iusto excepturi numquam soluta quia alias accusamus laudantium corrupti! Repellendus est repudiandae rem laudantium harum! Velit incidunt doloremque quasi corrupti pariatur a, provident tempore error ullam et fuga repellendus ipsam ipsum totam esse. Accusantium"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul Post Kedua",
            "author" => "Bunga Fajrin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ipsum, voluptatum error repellendus maxime quam hic voluptates temporibus, nam dolorem assumenda doloremque. Distinctio omnis cupiditate ad sit quasi nulla minus deleniti sed quae. Necessitatibus omnis ut libero illo eaque impedit hic repudiandae perferendis, corrupti ullam expedita, itaque sed quis dolore, rerum nobis ducimus consectetur. Blanditiis, fugiat! Aliquam eum accusantium amet officiis! Asperiores amet, natus odio quo doloribus cum culpa corporis adipisci beatae dolorem molestiae reprehenderit illum, quaerat in deserunt dolores eaque voluptates id numquam. Non odit eligendi nam atque, natus voluptate nobis magni porro, aut voluptatibus inventore ducimus eum ex"
        ]
    ];

    $new_post = []; 
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});