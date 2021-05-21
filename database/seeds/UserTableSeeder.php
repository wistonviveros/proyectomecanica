<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_emp = Role::where('name', 'emp')->first();
 $role_admin = Role::where('name', 'admin')->first();
 $user = new User();
 $user->name = 'Empleado';
 $user->email = 'empleado@example.com';
 $user->password = bcrypt('empleado');
 $user->save();
 $user->roles()->attach($role_emp);

 $user = new User();
 $user->name = 'Admin';
 $user->email = 'admin@example.com';
 $user->password = bcrypt('administrador');
 $user->save();
 $user->roles()->attach($role_admin);
}
}