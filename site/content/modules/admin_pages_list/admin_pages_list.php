<?php
require_once dirname(__FILE__) . "/../module.php";
class AdminPagesList extends Module{
    private $database;
    public function __construct(ModuleData $moduleData, Database $database = null){
        $this->database = is_null($database)? new Database(): $database;
        $moduleData->setData($this->getPageListData());
        parent::__construct($moduleData);
    }

    private function getPageListData()
    {
        $results = $this->database->execute("
                            SELECT s.id, p.name, st.type as sectionType, pt.type as pageType FROM core.sections_types st
                            JOIN core.sections s ON s.section_type_id = st.id
                            JOIN core.pages p ON p.section_id = s.id
                            JOIN core.pages_types pt ON p.page_type_id = pt.id;");
        return json_encode($results);
    }
}