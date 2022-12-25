<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = array([
            'name'=>"ჩედარ დელუქს კლასიკი",
            "group"=>"სენდვიჩები",
            "img"=>"https://mcdonalds.ge/1a59704a3ce8-resized.png",
            "groupId"=>1
        ],[
            'name'=>"ბურგირ",
            "group"=>"სენდვიჩები",
            "img"=>"https://mcdonalds.ge/1a59704a3ce8-resized.png",
            "groupId"=>2
        ],[
            'name'=>"ბურგირ2",
            "group"=>"სენდვიჩები",
            "img"=>"https://mcdonalds.ge/1a59704a3ce8-resized.png",
            "groupId"=>3
        ],[
            'name'=>"ბურგირ3",
            "group"=>"სენდვიჩები",
            "img"=>"https://mcdonalds.ge/1a59704a3ce8-resized.png",
            "groupId"=>4
        ],[
            'name'=>"ჩედარ დელუქს ჩიქენი",
            "group"=>"სენდვიჩები",
            "img"=>"https://mcdonalds.ge/79e320adbf87-resized.png",
            "groupId"=>5
        ],[
            'name'=>"ფიშ როლი",
            "group"=>"როლები & სალათები",
            "img"=>"https://mcdonalds.ge/0cddee43d9da-resized.png",
            "groupId"=>1
        ],[
            'name'=>"ვეჯი როლი",
            "group"=>"როლები & სალათები",
            "img"=>"https://mcdonalds.ge/486a8944b4ed-resized.png",
            "groupId"=>2
        ],[
            'name'=>"ჩედარო დელუქს ჩიზი",
            "group"=>"სენდვიჩები",
            "img"=>"https://mcdonalds.ge/058ca3012bc5-resized.png",
            "groupId"=>6
        ],[
            'name'=>"ჩედარო1",
            "group"=>"სენდვიჩები",
            "img"=>"https://mcdonalds.ge/058ca3012bc5-resized.png",
            "groupId"=>3
        ],[
            'name'=>"ჩედარო2",
            "group"=>"სენდვიჩები",
            "img"=>"https://mcdonalds.ge/058ca3012bc5-resized.png",
            "groupId"=>7
        ],[
            'name'=>"ჩედარო3",
            "group"=>"სენდვიჩები",
            "img"=>"https://mcdonalds.ge/058ca3012bc5-resized.png",
            "groupId"=>8
        ],[
            'name'=>"ბიგ თეისთი ჩიქენით",
            "group"=>"სენდვიჩები",
            "img"=>"https://mcdonalds.ge/b721ef1d9dda-resized.png",
            "groupId"=>9
        ],[
            'name'=>"ჩიქენ როლი",
            "group"=>"როლები & სალათები",
            "img"=>"https://mcdonalds.ge/f752f17ec039-resized.png",
            "groupId"=>4
        ],[
            'name'=>"ფიშმაკი",
            "group"=>"სენდვიჩები",
            "img"=>"https://mcdonalds.ge/885046d5b1c7-resized.png",
            "groupId"=>5
        ],[
            'name'=>"სალათი ცეზარი",
            "group"=>"როლები & სალათები",
            "img"=>"https://mcdonalds.ge/77a4dceb88cf-resized.png",
            "groupId"=>6
        ]);
        foreach($items as $item){
            Menu::insert($item);
        }
    }
}
