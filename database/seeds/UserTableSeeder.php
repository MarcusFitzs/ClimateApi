<?php
# @Date:   2019-12-02T14:15:39+00:00
# @Last modified time: 2019-12-02T14:18:24+00:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{

    // Run the database seeds.
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Marcus Fitzs';
        $admin->email = 'admin@climaware.ie';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $user = new User();
        $user->name = 'John Jones';
        $user->email = 'JohnJ@climaware.ie';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
