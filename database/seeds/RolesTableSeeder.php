<?php
# @Date:   2019-12-02T14:15:29+00:00
# @Last modified time: 2019-12-02T14:17:06+00:00




use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{

     //Run the database seeds.

    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'an administrator user';
        $role_admin->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'an ordinary user';
        $role_user->save();
    }
}
