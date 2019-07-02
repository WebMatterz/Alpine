<?php

class Migration_Permission_Role extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'permission_id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE
            ),
            'role_id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE
            )           
        ));
        $this->dbforge->add_key('permission_id', TRUE);
        $this->dbforge->add_key('role_id', TRUE);
        $this->dbforge->add_key(array('role_id'));
        $this->dbforge->create_table('permission_role');
    }

    public function down() {
        $this->dbforge->drop_table('permission_role');
    }

}