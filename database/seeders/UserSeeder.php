<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $userAdmin = new User();
        $userAdmin->name = 'cley';
        $userAdmin->email = 'cley@gmail.com';
        $userAdmin->rol = '4';
        $userAdmin->avatar = 'storage/img/icons/person-circle.svg';
        $userAdmin->password = bcrypt('2303');
        $userAdmin->save();
        //
        $userAdmin = new User();
        $userAdmin->name = 'carlos';
        $userAdmin->email = 'carlos@gmail.com';
        $userAdmin->rol = '4';
        $userAdmin->avatar = 'storage/img/icons/person-circle.svg';
        $userAdmin->password = bcrypt('123456');
        $userAdmin->save();
        //
        $userAdmin = new User();
        $userAdmin->name = 'miguel';
        $userAdmin->email = 'miguel@gmail.com';
        $userAdmin->rol = '4';
        $userAdmin->avatar = 'storage/img/icons/person-circle.svg';
        $userAdmin->password = bcrypt('123456');
        $userAdmin->save();
        //
        // $userAdmin = new User();
        // $userAdmin->name = 'junior';
        // $userAdmin->email = 'junior@gmail.com';
        // $userAdmin->rol = '4';
        // $userAdmin->avatar = 'storage/img/icons/person-circle.svg';
        // $userAdmin->password = bcrypt('123456');
        // $userAdmin->save();
        // user log rol 0
        // $userLocal = new User();
        // $userLocal->name = 'jose';
        // $userLocal->email = 'jose@gmail.com';
        // $userLocal->rol = '0';
        // $userAdmin->avatar = 'storage/img/icons/userLogin.png';
        // $userLocal->password = bcrypt('123456');
        // $userLocal->save();

        $userLocal = new User();
        $userLocal->name = 'junior';
        $userLocal->email = 'junior@gmail.com';
        $userLocal->rol = '0';
        $userAdmin->avatar = 'storage/img/icons/userLogin.png';
        $userLocal->password = bcrypt('123456');
        $userLocal->save();
        //
        $userLocal = new User();
        $userLocal->name = 'mark';
        $userLocal->email = 'mark@gmail.com';
        $userLocal->rol = '0';
        $userAdmin->avatar = 'storage/img/icons/userLogin.png';
        $userLocal->password = bcrypt('123456');
        $userLocal->save();
    }
}
