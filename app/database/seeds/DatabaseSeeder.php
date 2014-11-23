<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('UserSeeder');
	}

}

class UserSeeder extends DatabaseSeeder{
    
    public function run() {
        
            $users = [
                [
                    "username" => "christopher.pitt",
                    "password" => Hash::make("1234"),
                    "email" => "chris@email.com"
                
                ]
            ];
            
            foreach ($users as $user){
                User::create($user);
            }
    }
}
