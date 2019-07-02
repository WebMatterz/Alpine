<?php

class Migration_Stations extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'station_code' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'station_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 11,
            ),
            'mySAD' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'mySAL' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'region_id' => array(
                'type' => 'INT',
                'constraint' => 11,
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('stations');
    }

    public function down() {
        $this->dbforge->drop_table('stations');
    }

}
