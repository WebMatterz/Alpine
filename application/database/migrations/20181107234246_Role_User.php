<?php

class Migration_Role_User extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE
            ),
            'user_type' => array(
                'type' => 'VARCHAR',
                'constraint' => 255
            )            
        ));
        $this->dbforge->add_key('role_id', TRUE);
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->add_key('user_type', TRUE);
        $this->dbforge->add_key(array('role_id'));
        $this->dbforge->create_table('role_user');
    }

    public function down() {
        $this->dbforge->drop_table('role_user');
    }

}