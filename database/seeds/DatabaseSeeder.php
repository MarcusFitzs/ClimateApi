<?php
# @Date:   2019-11-17T18:57:08+00:00
# @Last modified time: 2020-02-26T19:56:21+00:00



use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

     // Run the database seeds.
    public function run()
    {


      factory(App\People::class, 2)->create();
      $this->call(RolesTableSeeder::class);
      $this->call(UsersTableSeeder::class);
      $this->call(ArticlesTableSeeder::class);

        // Creates Articles with an Author and Comment
        // through relations & attribute Closures
        // factory(App\Article::class, 5)
        //    ->create()
        //    ->each(function ($u) {
        //         $u->comments()->save(factory(App\Comment::class)->create());
        //     }
        // );
        // Creates authors with no articles

        // Creates Articles without Comments
        //factory(App\Article::class, 3)->create();
    }
}
