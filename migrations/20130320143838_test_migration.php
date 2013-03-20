<?php

use Phinx\Migration\AbstractMigration;

class TestMigration extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $count = $this->execute("INSERT INTO core.modules (id, module_type_id) VALUES ('4', '4');");
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}