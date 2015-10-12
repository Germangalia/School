<?php namespace Com\Iesebre\Dam2\germangalia\Persons;

/**
 * Created by PhpStorm.
 * Users: ggalia84
 * Date: 5/10/15
 * Time: 18:15
 */
class Student extends  Person
{
    use Worker;

    /**
     * Boolean of dual study.
     * @var bool|null
     */
    public $dual = false;

    /**
     * Keep classroom group.
     * @var
     */
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

    /**
     * Print the student and his salary.
     */
    public function render()
    {
        $this->type = "Estudiant";

        if($this->dual){
            parent::render() . " i cobra " . $this->salary;
        } else {
            parent::render();
        }
    }
}