<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->truncate();
        DB::table('category')->insert([
            [
                'name'=>'なし',
                'parent_cat_id'=>'1',
                'updateby'=>'1',
                'update'=>'2018-12-11 23:25:46'
            ],[
                'name'=>'アウターウェア',
                'parent_cat_id'=>'1',
                'updateby'=>'1',
                'update'=>'2018-12-11 23:25:46'
            ],[
                'name'=>'インナーウェア',
                'parent_cat_id'=>'1',
                'updateby'=>'1',
                'update'=>'2018-12-11 23:26:46'
            ],[
                'name'=>'スーツ',
                'parent_cat_id'=>'2',
                'updateby'=>'1',
                'update'=>'2018-12-11 23:27:46'
            ],[
                'name'=>'コート',
                'parent_cat_id'=>'2',
                'updateby'=>'1',
                'update'=>'2018-12-11 23:28:46'
            ],[
                'name'=>'肌着',
                'parent_cat_id'=>'3',
                'updateby'=>'2',
                'update'=>'2018-12-11 23:29:46'
            ],[
                'name'=>'下着',
                'parent_cat_id'=>'6',
                'updateby'=>'2',
                'update'=>'2018-12-11 23:30:46'
            ]
        ]);
    }
}
