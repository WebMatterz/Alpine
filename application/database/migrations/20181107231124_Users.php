<?php

class Migration_Users extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'user_code' => array(
                'type' => 'VARCHAR',
                'constraint' => 12
            ),            
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 150
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'email_verified_at' => array(
                'type' => 'DATETIME',
                'default' => NULL
            ),
            'admin' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0
            ),            
            'is_locked' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0
            ),
            'user_type' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),            
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'remember_token' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',

            'updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP'                                                           
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down() {
        $this->dbforge->drop_table('users');
    }

}