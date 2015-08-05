<?php
class Task
{

    private $description;

    function __construct($description)
    {
        $this->description = $description;
    }

    function setDescription($new_description)
    {
        $this->description = (string) $new_description;
    }

    function getDescription()
    {
        return $this->description;
    }

    //Store tasks to the list_of_tasks key of the $_SESSION super global array
    function save()
    {
        array_push($_SESSION['list_of_tasks'], $this);
    }

    //static method to loop through all saved tasks
    static function getAll()
    {
        return $_SESSION['list_of_tasks'];
    }
}
?>
