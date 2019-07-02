<?php

class Migration_Menu_Item extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'menu_id' => array(
                'type' => 'VARCHAR',
                'constraint' => 150
            ),
            'label' => array(
                'type' => 'VARCHAR',
                'constraint' => 150
            ),
            'link' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'parent' => array(
                'type' => 'VARCHAR',
                'constraint' => 150
            ),
            'sort' => array(
                'type' => 'VARCHAR',
                'constraint' => 150
            ),
            'permission' => array(
                'type' => 'VARCHAR',
                'constraint' => 150
            )                                                                        
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('menu_item');
    }

    public function down() {
        $this->dbforge->drop_table('menu_item');
    }

}