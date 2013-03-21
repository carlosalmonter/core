<?php

use Phinx\Migration\AbstractMigration;

class AddingAdminCreatePageModule extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $count = $this->execute("INSERT INTO core.modules_types (id, type) VALUES (4, 'admin_create_new_page');");
        $count += $this->execute("INSERT INTO core.modules (id, module_type_id) VALUES (4, 4);");
        echo $count . " affected rows\n";
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}