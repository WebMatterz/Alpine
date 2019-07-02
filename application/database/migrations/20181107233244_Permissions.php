<?php

class Migration_Permissions extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'display_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'controller_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),
            'action_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),                        
            'discription' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'menu_item_id' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            
            'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',

            'updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP'   
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('permissions');
    }

    public function down() {
        $this->dbforge->drop_table('permissions');
    }

}