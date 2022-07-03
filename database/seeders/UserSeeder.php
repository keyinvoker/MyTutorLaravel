<?php

namespace Database\Seeders;

use App\Models\Tutor;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Prashanthini a/l Manjit Ramasamy',
            'email'=>'prashanthini@mytutor.com.my',
            'phone'=>'+60188816970',
            'address'=>'Alor Setar',
            'state' => 'Kedah',
            'password'=>'6367c48dd193d56ea7b0baad25b19455e529f5ee',
            'description'=>'Nunc venenatis bibendum odio, in fermentum sem ultrices sed. Integer in quam turpis. Curabitur sed euismod sem, sed fringilla arcu. Sed justo felis, hendrerit eget elit ac, consequat sodales nibh.',
        ]);
        User::create([
            'name'=>'Chai Tan Hiu',
            'email'=>'sinnathuray.bakzi@yang.com',
            'phone'=>'+601132339126',
            'address'=>'Alor Setar',
            'state' => 'Kedah',
            'password'=>'86e40acfd92d4c5f44de76963ab68208ef0ab389',
            'description'=>'Integer nulla dui, blandit eu sollicitudin vitae, malesuada at est. Curabitur varius nisl vitae felis sagittis, sit amet porta urna mollis. Proin venenatis justo lorem, vitae tincidunt dui pharetra vel.',
        ]);
        User::create([
            'name'=>'Nur Maya binti Aidil Hafizee ',
            'email'=>'huzir42@bakry.org',
            'phone'=>'+6095798898',
            'address'=>'Alor Setar',
            'state' => 'Kedah',
            'password'=>'02dd38ccd56a4efbe22f4599f4717a8cf3eb9281',
            'description'=>'Maecenas vitae leo in ipsum pulvinar hendrerit vitae ac urna. Maecenas consequat aliquet leo pulvinar tincidunt. Vivamus placerat neque sit amet hendrerit feugiat.',
        ]);
        User::create([
            'name'=>'Ling Liang Thok',
            'email'=>'dkok@majid.biz',
            'phone'=>'+60377236036',
            'address'=>'Alor Setar',
            'state' => 'Kedah',
            'password'=>'76b241504f3904db725c01fcc532c2bdfae609ae',
            'description'=>'Aliquam dignissim ut libero non aliquet. Etiam eu ultricies enim. Phasellus gravida ac libero in porta. Phasellus tincidunt feugiat est, quis pellentesque risus eleifend vitae.',
        ]);
        User::create([
            'name'=>'Teoh Chum Liek',
            'email'=>'melissa57@hotmail.com',
            'phone'=>'+6069427992',
            'address'=>'Alor Setar',
            'state' => 'Kedah',
            'password'=>'86e40acfd92d4c5f44de76963ab68208ef0ab389',
            'description'=>'Morbi at turpis in quam gravida facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac nisl lorem. ',
        ]);
        User::create([
            'name'=>'Amirah binti Che Aznizam',
            'email'=>'azizy.kavita@foong.info',
            'phone'=>'+60152045292',
            'address'=>'Changlun',
            'state' => 'Kedah',
            'password'=>'02dd38ccd56a4efbe22f4599f4717a8cf3eb9281',
            'description'=>'Nullam sed fringilla nisl. Proin aliquet metus quis ornare faucibus. Proin non mauris maximus, mollis enim non, bibendum nibh. Morbi feugiat fermentum imperdiet. ',
        ]);
        User::create([
            'name'=>'Teoh Chum Liek',
            'email'=>'teoki57@hotmail.com',
            'phone'=>'+6069427992',
            'address'=>'Changlun',
            'state' => 'Kedah',
            'password'=>'86e40acfd92d4c5f44de76963ab68208ef0ab389',
            'description'=>'Morbi at turpis in quam gravida facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac nisl lorem. ',
        ]);
        User::create([
            'name'=>'Muhammet Firdaus Miskoulan bin Jamal',
            'email'=>'nelson.jaini@parthiban.info',
            'phone'=>'+60102727980',
            'address'=>'Changlun',
            'state' => 'Kedah',
            'password'=>'b4b9c99d312bf05bfb05341d981d6a17ace24b51',
            'description'=>'Duis at iaculis ante. Praesent in risus blandit, tempus nibh eu, imperdiet nunc. Ut quis lobortis quam. Nullam sed purus eros. Donec ac viverra orci. Pellentesque non neque et tellus gravida interdum',
        ]);
        User::create([
            'name'=>'P. Veetil a/l Ramadas',
            'email'=>'vetils@veerasamy.com',
            'phone'=>'+6089-64 4857',
            'address'=>'Changlun',
            'state' => 'Kedah',
            'password'=>'49bd6349e19baa02a3adb1d770cb873fcca2cf38',
            'description'=>'Proin venenatis justo lorem, vitae tincidunt dui pharetra vel. Duis ultricies gravida condimentum. Phasellus pellentesque sodales dolor, dictum pulvinar felis convallis ut.',
        ]);
        User::create([
            'name'=>'Ahmad Hanis',
            'email'=>'slumberjer@gmail.com',
            'phone'=>'+60194702493',
            'address'=>'Changlun',
            'state' => 'Kedah',
            'password'=>bcrypt('hanistar123'),
            'description'=>'Ahmad Hanis is a professional lecturer in all programming fields known to man, but especially Web Programming and Mobile Programming. 20 years of coding experience. No other lecturer comes close.',
        ]);
    }
}
