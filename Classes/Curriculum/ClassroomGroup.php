<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 5/10/15
 * Time: 20:11
 */

namespace Com\Iesebre\Dam2\germangalia\Curriculum;


use Com\Iesebre\Dam2\germangalia\Persons\Student;

class ClassroomGroup
{
    /**
     * Array per a guardar els estudiants.
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
     * Insertar un alumne al array de estudiants.
     * @param Student $student
     */
    public function addStudent(Student $student)
    {
        array_push($this->students,$student);
        //$this->students[] = $student
    }

    /**
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }


}