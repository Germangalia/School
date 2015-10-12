<?php namespace Com\Iesebre\Dam2\germangalia\Persons;

/**
 * Created by PhpStorm.
 * Users: ggalia84
 * Date: 5/10/15
 * Time: 18:06
 */
class Teacher extends Person
{

    use Worker;

    /**
     * Speciality of the teacher.
     * @var
     */
    public $specification;

    /**
     * Print the teacher and his name like method render() of the Person class.
     */
    public function render()
    {
        $this->type = "Professor";
        parent::render();
    }
}