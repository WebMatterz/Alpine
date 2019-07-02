<?php

class Migration_Regions extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
            'discription' => array(
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => TRUE
            ),            
            'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',

            'updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP'                     
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('regions');
    }

    public function down() {
        $this->dbforge->drop_table('regions');
    }

}