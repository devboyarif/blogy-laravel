<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(20)->create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('post_tag')->insert(
                [
                    'post_id' => Post::inRandomOrder()->first()->id,
                    'tag_id' => Tag::inRandomOrder()->first()->id,
                ]
            );
        }
    }
}
