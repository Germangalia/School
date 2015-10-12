<?php namespace Com\Iesebre\Dam2\germangalia\Curriculum;
use Com\Iesebre\Dam2\germangalia\Persons\Student;
use Com\Iesebre\Dam2\germangalia\Persons\Teacher;

/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 5/10/15
 * Time: 19:57
 */
class StudyModule extends Course
{

    /**
     * Name of Study Module.
     * @var
     */
    public $studyModuleName;

    /**
     * ID of Study Module.
     * @var
     */
    public $studyModuleID;

    /**
     * Keep Study Sub Modules of Study Module in this array.
     * @var array
     */
    public $studyModuleStudySubModules = array();

    /**
     * Keep teachers of Study Module in this array.
     * @var array
     */
    public $studyModuleTachers = array();

    /**
     * Keep students of study module in this array.
     * @var array
     */
    public $studyModuleStudents = array();

    /**
     * StudyModule constructor.
     * @param $studyModuleName
     * @param $studyModuleID
     * @param array $studyModuleStudySubModules
     * @param array $studyModuleTachers
     * @param array $studyModuleStudents
     */
    public function __construct($studyModuleName, $studyModuleID, array $studyModuleStudySubModules, array $studyModuleTachers, array $studyModuleStudents)
    {
        $this->studyModuleName = $studyModuleName;
        $this->studyModuleID = $studyModuleID;
        $this->studyModuleStudySubModules = $studyModuleStudySubModules;
        $this->studyModuleTachers = $studyModuleTachers;
        $this->studyModuleStudents = $studyModuleStudents;
    }

    /**
     * Get studyModuleName.
     * @return mixed
     */
    public function getStudyModuleName()
    {
        return $this->studyModuleName;
    }

    /**
     * Set studyModuleName.
     * @param mixed $studyModuleName
     */
    public function setStudyModuleName($studyModuleName)
    {
        $this->studyModuleName = $studyModuleName;
    }

    /**
     * Get studyModuleID.
     * @return mixed
     */
    public function getStudyModuleID()
    {
        return $this->studyModuleID;
    }

    /**
     * Set studyModuleID.
     * @param mixed $studyModuleID
     */
    public function setStudyModuleID($studyModuleID)
    {
        $this->studyModuleID = $studyModuleID;
    }

    /**
     * Get studyModuleStudySubModules.
     * @return array
     */
    public function getStudyModuleStudySubModules()
    {
        return $this->studyModuleStudySubModules;
    }

    /**
     * Set studyModuleStudySubModules.
     * @param array $studyModuleStudySubModules
     */
    public function setStudyModuleStudySubModules($studyModuleStudySubModules)
    {
        $this->studyModuleStudySubModules = $studyModuleStudySubModules;
    }

    /**
     * Get studyModuleTachers.
     * @return array
     */
    public function getStudyModuleTachers()
    {
        return $this->studyModuleTachers;
    }

    /**
     * Set studyModuleTachers.
     * @param array $studyModuleTachers
     */
    public function setStudyModuleTachers($studyModuleTachers)
    {
        $this->studyModuleTachers = $studyModuleTachers;
    }

    /**
     * Get studyModuleStudents.
     * @return array
     */
    public function getStudyModuleStudents()
    {
        return $this->studyModuleStudents;
    }

    /**
     * Set studyModuleStudents.
     * @param array $studyModuleStudents
     */
    public function setStudyModuleStudents($studyModuleStudents)
    {
        $this->studyModuleStudents = $studyModuleStudents;
    }

    /**
     * Add a new Study Module.
     * @param StudySubModuleModule $studyModuleStudySubModules
     */
    public function addStudyModuleStudySubModules(StudySubModuleModule $studyModuleStudySubModules) {
        array_push($this->studyModuleStudySubModules = $studyModuleStudySubModules);

    }

    /**
     * Add a new Teacher.
     * @param Teacher $studyModuleTachers
     */
    public function addStudyModuleTachers(Teacher $studyModuleTachers) {
        array_push($this->studyModuleTachers = $studyModuleTachers);

    }

    /**
     * Add a new Student.
     * @param Student $studyModuleStudents
     */
    public function addtudyModuleStudents(Student $studyModuleStudents) {
        array_push($this->studyModuleStudents = $studyModuleStudents);

    }

}