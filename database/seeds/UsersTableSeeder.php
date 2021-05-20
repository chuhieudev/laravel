<?php
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	user::create([
    		'name'              => 'user',
    		'email'             => 'user@gmail.com',
    		'phone'				=>'0909093212',
    		'address'			=>'Hà Nội',
    		'gender'			=>1,
    		'avatar'			=>'',
    		'password'          => bcrypt(1),
    	]);
    	factory(App\Models\User::class,49)->create();
    }
}
