<?php
class ModuleData{
    private $type;
    private $position;
    private $data;
    public function setType($type)
    {
        $this->type = $type;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getData()
    {
        return $this->data;
    }
}