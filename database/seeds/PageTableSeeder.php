<?php

use Illuminate\Database\Seeder;
use App\Page;

class PageTableSeeder extends Seeder {

  public function run()
  {
    DB::table('pages')->truncate();
    DB::table('comments')->truncate();
    for ($i=0; $i < 10; $i++) {
      Page::create([
        'title'   => 'Title '.$i,
        'slug'    => 'first-page',
        'body'    => 'Body '.$i,
        'user_id' => 1,
      ]);
    }
  }

}
