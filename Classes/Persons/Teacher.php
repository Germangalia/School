<?php namespace Com\Iesebre\Dam2\germangalia\Persons;

/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 5/10/15
 * Time: 18:06
 */
class Teacher extends Person
{

    use Worker;

    public $specification;

    public function render()
    {
        $this->type = "Professor";
        parent::render();
    }
}