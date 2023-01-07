<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder{

    public function run(){
        $user_object = new UserModel();

		$user_object->insertBatch([
			[
				"name" => "sajedul Khan",
				"email" => "sajedul@gmail.com",
				"phone_no" => "7899654125",
				"role" => "admin",
				"password" => password_hash("1234", PASSWORD_DEFAULT)
			],
			[
				"name" => "Tamim Khan",
				"email" => "prabhat@mail.com",
				"phone_no" => "8888888888",
				"role" => "editor",
				"password" => password_hash("1234", PASSWORD_DEFAULT)
			]
		]);
    }
}
