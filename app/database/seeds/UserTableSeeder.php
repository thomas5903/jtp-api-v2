<?php
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array(
            'username' => 'jtpUser1',
            'password' => Hash::make('jtp47')
        ));
    }
 
}