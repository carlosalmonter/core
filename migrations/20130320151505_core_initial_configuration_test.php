<?php

use Phinx\Migration\AbstractMigration;

class CoreInitialConfigurationTest extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $count = $this->execute("CREATE TABLE IF NOT EXISTS core.modules (
          id int(11) NOT NULL AUTO_INCREMENT,
          module_type_id int(11) DEFAULT NULL,
          section_id int(11) DEFAULT NULL,
          data text,
          position varchar(200) DEFAULT NULL,
          PRIMARY KEY (id)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;");

        $count += $this->execute("INSERT INTO core.modules (id, module_type_id, section_id, data, position) VALUES
        (1, 1, 1, '[{\"menuTitle\": \"Main Control\",\"menuItems\": [{\"label\":\"Visit site\", \"icon\": \"view_page\"}, {\"label\":\"Reports\", \"icon\": \"report\"}]},{\"menuTitle\": \"Manage Content\",\"menuItems\": [{\"label\":\"Show all pages\", \"icon\": \"page\"}, {\"label\":\"Add new page\", \"icon\": \"add_page\"}]},{\"menuTitle\": \"Users\",\"menuItems\": [{\"label\":\"Show all users\", \"icon\": \"users\"}, {\"label\":\"Add new user\", \"icon\": \"add_user\"}]}]', 'left_column'),
        (2, 2, 1, '{\"title\": \"Welcome to CORE admin page\"}', 'header');");

        $count += $this->execute("CREATE TABLE IF NOT EXISTS core.modules_types (
          id int(11) NOT NULL AUTO_INCREMENT,
          type varchar(200) DEFAULT NULL,
          PRIMARY KEY (id)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;");

        $count += $this->execute("INSERT INTO core.modules_types (id, type) VALUES
        (1, 'admin_menu'),
        (2, 'header');");

        $count += $this->execute("CREATE TABLE IF NOT EXISTS core.pages (
          id int(11) NOT NULL AUTO_INCREMENT,
          page_type_id int(11) DEFAULT NULL,
          section_id int(11) DEFAULT NULL,
          name varchar(200) DEFAULT NULL,
          PRIMARY KEY (id)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;");


        $count += $this->execute("INSERT INTO core.pages (id, page_type_id, section_id, name) VALUES
        (1, 2, 1, 'Admin Page');");

        $count += $this->execute("CREATE TABLE IF NOT EXISTS core.pages_types (
          id int(11) NOT NULL AUTO_INCREMENT,
          type varchar(200) DEFAULT NULL,
          PRIMARY KEY (id)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;");

        $count += $this->execute("INSERT INTO core.pages_types (id, type) VALUES
        (1, 'generic'),
        (2, 'two_columns');");

        $count += $this->execute("CREATE TABLE IF NOT EXISTS core.sections (
          id int(11) NOT NULL AUTO_INCREMENT,
          section_type_id varchar(200) DEFAULT NULL,
          PRIMARY KEY (id)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;");


        $count += $this->execute("INSERT INTO core.sections (id, section_type_id) VALUES
        (1, '1');");

        $count += $this->execute("CREATE TABLE IF NOT EXISTS core.sections_types (
          id int(11) NOT NULL AUTO_INCREMENT,
          type varchar(200) DEFAULT NULL,
          PRIMARY KEY (id)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;");

        $count += $this->execute("INSERT INTO core.sections_types (id, type) VALUES
        (1, 'admin'),
        (2, 'test');");

        $count += $this->execute("INSERT INTO core.modules_types (id, type) VALUES (3, 'admin_pages_list');");

        $count += $this->execute("INSERT INTO core.modules (id, module_type_id, position) VALUES (3, 3, 'right_column');");

        echo $count . "affected rows";

    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}