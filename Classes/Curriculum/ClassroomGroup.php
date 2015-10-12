<?php
/**
 * Created by PhpStorm.
 * Users: ggalia84
 * Date: 5/10/15
 * Time: 20:11
 */

namespace Com\Iesebre\Dam2\germangalia\Curriculum;


use Com\Iesebre\Dam2\germangalia\Persons\Student;

class ClassroomGroup
{
    /**
     * Keep Etudents array.
     * @var array
     */
    public $students = array();

    /**
     * ClassroomGroup constructor.
     * @param array $students
     */
    public function __construct(array $students)
    {
        $this->students = $students;
    }

    /**
     * Inserta a Student to Students array.
     * @param Student $student
     */
    public function addStudent(Student $student)
    {
        array_push($this->students,$student);
        //$this->students[] = $student
    }

    /**
     * Get Student.
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Set Student.
     * @param array $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }


}