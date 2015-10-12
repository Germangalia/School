<?php namespace Com\Iesebre\Dam2\germangalia\Curriculum;

/**
 * Created by PhpStorm.
 * Users: ggalia84
 * Date: 5/10/15
 * Time: 19:57
 */

use Com\Iesebre\Dam2\germangalia\Persons\Student;
use Com\Iesebre\Dam2\germangalia\Persons\Teacher;

class Course
{

    /**
     * Name of course.
     * @var
     */
    public $courseName;

    /**
     * ID of course.
     * @var
     */
    public $courseID;

    /**
     * Keep Study Modules of course in this array.
     * @var array
     */
    public $courseStudyModules = array();

    /**
     * Keep Teachers of course in this array.
     * @var array
     */
    public $courseTachers = array();

    /**
     * Keep Students of course in this array.
     * @var array
     */
    public $courseStudents = array();

    /**
     * Course constructor.
     * @param $courseName
     * @param $courseID
     * @param array $courseStudyModules
     * @param array $courseTachers
     * @param array $courseStudents
     */
    public function __construct($courseName, $courseID, array $courseStudyModules, array $courseTachers, array $courseStudents)
    {
        $this->courseName = $courseName;
        $this->courseID = $courseID;
        $this->courseStudyModules = $courseStudyModules;
        $this->courseTachers = $courseTachers;
        $this->courseStudents = $courseStudents;
    }

    /**
     * Get courseName.
     * @return mixed
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * Get courseName.
     * @param mixed $courseName
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
    }

    /**
     * Get courseID.
     * @return mixed
     */
    public function getCourseID()
    {
        return $this->courseID;
    }

    /**
     * Set courseID.
     * @param mixed $courseID
     */
    public function setCourseID($courseID)
    {
        $this->courseID = $courseID;
    }

    /**
     * Get courseStudyModules.
     * @return array
     */
    public function getCourseStudyModules()
    {
        return $this->courseStudyModules;
    }

    /**
     * Set courseStudyModules.
     * @param array $courseStudyModules
     */
    public function setCourseStudyModules($courseStudyModules)
    {
        $this->courseStudyModules = $courseStudyModules;
    }

    /**
     * Get courseTeachers
     * @return array
     */
    public function getCourseTachers()
    {
        return $this->courseTachers;
    }

    /**
     * Set courseTeachers.
     * @param array $courseTachers
     */
    public function setCourseTachers($courseTachers)
    {
        $this->courseTachers = $courseTachers;
    }

    /**
     * Get courseStudents.
     * @return array
     */
    public function getCourseStudents()
    {
        return $this->courseStudents;
    }

    /**
     * Set courseStudents.
     * @param array $courseStudents
     */
    public function setCourseStudents($courseStudents)
    {
        $this->courseStudents = $courseStudents;
    }

    /**
     * Add a new course study module.
     * @param array $courseStudyModules
     */
    public function addCourseStudyModules(StudyModule $courseStudyModules) {
        array_push($this->courseStudyModules = $courseStudyModules);

    }

    /**
     * Add a new course teacher.
     * @param array $courseTeachers
     */
    public function addCourseTeachers(Teacher $courseTeachers) {
        array_push($this->courseTeachers = $courseTeachers);

    }

    /**
     * Add a new course students.
     * @param array $courseStudents
     */
    public function addCourseStudents(Student $courseStudents) {
        array_push($this->courseStudents = $courseStudents);

    }

}
