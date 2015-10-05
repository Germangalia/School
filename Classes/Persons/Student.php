<?php namespace Com\Iesebre\Dam2\germangalia\Persons;

/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 5/10/15
 * Time: 18:15
 */
class Student extends  Person
{
    use Worker;

    public $dual = false;

    public $classRoomGroup;

    /**
     * Student constructor.
     * @param bool $dual
     */
    public function __construct($dual=null)
    {
        parent::__construct();
        if ($dual != null) {
            $this->dual = $dual;
        }

    }

    public function render()
    {
        $this->type = "Estudiant";

        if($this->$dual){
            parent::render() . " i cobra " . $this->salary;
        } else {
            parent::render();
        }
    }
}