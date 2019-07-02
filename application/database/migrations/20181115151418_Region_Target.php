<?php

class Migration_Region_Target extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'region' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
            'target' => array(
                'type' => 'INT',
                'constraint' => 11
            ),
            'created_by' => array(
                'type' => 'VARCHAR',
                'constraint' => 100
            ),            
            'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',

            'updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP'                
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('region_target');
    }

    public function down() {
        $this->dbforge->drop_table('region_target');
    }

}