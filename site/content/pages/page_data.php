<?php
class PageData{
    private $name;
    private $type;
    private $section;

    public function setSection($section)
    {
        $this->section = $section;
    }

    public function getSection()
    {
        return $this->section;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}