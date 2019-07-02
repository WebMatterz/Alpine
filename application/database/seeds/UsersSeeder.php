<?php

class UsersSeeder extends Seeder {

    private $table = 'users';

    public function run() {
        $this->db->truncate($this->table);

        // //seed records manually
        // $data = [
        //     'user_name' => 'admin',
        //     'password' => '9871'
        // ];
        $this->db->insert($this->table, $data);

        //seed many records using faker
        $limit = 5;
        echo "seeding $limit user accounts";

        for ($i = 0; $i < $limit; $i++) {
            echo ".";

            $data = array(
                'name' => $this->faker->unique()->userName,
                'email' => $i.'@emportal.com',
                'email_verified_at' => $this->faker->date($format = 'Y-m-d'),
                'password' => bcrypt('password')
            );

            $this->db->insert($this->table, $data);
        }

        echo PHP_EOL;
    }
}
