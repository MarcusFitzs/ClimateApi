<?php
# @Date:   2019-11-17T18:57:08+00:00
# @Last modified time: 2019-11-18T17:41:23+00:00



use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creates Articles with an Author and Comment
        // through relations & attribute Closures
        factory(App\Article::class, 5)
           ->create()
           ->each(function ($u) {
                $u->comments()->save(factory(App\Comment::class)->create());
            }
        );
        // Creates authors with no articles
        factory(App\People::class, 2)->create();
        // Creates Articles without Comments
        factory(App\Article::class, 3)->create();
    }
}
