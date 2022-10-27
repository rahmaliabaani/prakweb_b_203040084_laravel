<?php  

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perspiciatis dicta mollitia reiciendis beatae, nemo laborum cupiditate totam at? At eius quos officiis excepturi voluptas assumenda suscipit non dolores, vero, ad recusandae distinctio illum. Voluptates, distinctio dolor, pariatur ut quod laborum doloremque temporibus reprehenderit ipsa deserunt iusto excepturi numquam soluta quia alias accusamus laudantium corrupti! Repellendus est repudiandae rem laudantium harum! Velit incidunt doloremque quasi corrupti pariatur a, provident tempore error ullam et fuga repellendus ipsam ipsum totam esse. Accusantium"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ipsum, voluptatum error repellendus maxime quam hic voluptates temporibus, nam dolorem assumenda doloremque. Distinctio omnis cupiditate ad sit quasi nulla minus deleniti sed quae. Necessitatibus omnis ut libero illo eaque impedit hic repudiandae perferendis, corrupti ullam expedita, itaque sed quis dolore, rerum nobis ducimus consectetur. Blanditiis, fugiat! Aliquam eum accusantium amet officiis! Asperiores amet, natus odio quo doloribus cum culpa corporis adipisci beatae dolorem molestiae reprehenderit illum, quaerat in deserunt dolores eaque voluptates id numquam. Non odit eligendi nam atque, natus voluptate nobis magni porro, aut voluptatibus inventore ducimus eum ex"
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

?>