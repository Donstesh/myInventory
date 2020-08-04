<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin;
        $admin->name = 'Stephen Sienko';
        $admin->email = 'stephen@myinventory.com';
        $admin->email_verified_at = '2020-02-28 14:28:34';
        $admin->password = Hash::make('Stesh28*');
        $admin->by = 'Stephen Sienko';
        $admin->save();

        $admin = new Admin;
        $admin->name = 'Brian Mongoi';
        $admin->email = 'brian@myinventory.com';
        $admin->email_verified_at = '2020-02-28 14:28:34';
        $admin->password = Hash::make('Brian12*');
        $admin->by = 'Stephen Sienko';
        $admin->save();

        $admin = new Admin;
        $admin->name = 'Leonard Mongoi';
        $admin->email = 'leonard@myinventory.com';
        $admin->email_verified_at = '2020-02-28 14:28:34';
        $admin->password = Hash::make('Leo1234*');
        $admin->by = 'Stephen Sienko';
        $admin->save();
    }
}
