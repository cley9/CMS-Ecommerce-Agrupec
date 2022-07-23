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
        //
//         12=
// $2y$10$/zwFfNZlbD.nwq4hhsL5Le1B1msGebTTUxY7hOjHmw/wioWZNMW7q

        $userAdmin=new User();
        $userAdmin->name='cley';
        $userAdmin->email='cley@gmail.com';
        $userAdmin->rol='4';
        $userAdmin->password='$2y$10$/zwFfNZlbD.nwq4hhsL5Le1B1msGebTTUxY7hOjHmw/wioWZNMW7q';
        $userAdmin->save();
        // user log rol 0
        $userLocal=new User();
        $userLocal->name='jose';
        $userLocal->email='jose@gmail.com';
        $userLocal->rol='0';
        $userLocal->password='$2y$10$/zwFfNZlbD.nwq4hhsL5Le1B1msGebTTUxY7hOjHmw/wioWZNMW7q';
        $userLocal->save();

    }
}
