<?php namespace Com\Iesebre\Dam2\germangalia\Curriculum;

/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 5/10/15
 * Time: 19:58
 */

use Com\Iesebre\Dam2\germangalia\Persons\Student;
use Com\Iesebre\Dam2\germangalia\Persons\Teacher;
use Com\Iesebre\Dam2\germangalia\Location\Location;

class StudySubModule extends StudyModule
{

    /**
     * Name of Study Sub Module.
     * @var
     */
    public $studySubModuleName;

    /**
     * ID of Study Sub Module.
     * @var
     */
    public $studySubModuleID;

    /**
     * Keep Study Lessons of Study Sub Module in this array.
     * @var array
     */
    public $studySubModuleLessons = array();

    /**
     * Keep teachers of Study Sub Module in this array.
     * @var array
     */
    public $studySubModuleTachers = array();

    /**
     * Keep students of Study Sub Module in this array.
     * @var array
     */
    public $studySubModuleStudents = array();

    /**
     * Keep locations of Study Sub Module in this array.
     * @var array
     */
    public $studySubModuleLocations = array();

    /**
     * StudySubModule constructor.
     * @param $studySubModuleName
     * @param $studySubModuleID
     * @param array $studySubModuleLessons
     * @param array $studySubModuleTachers
     * @param array $studySubModuleStudents
     * @param array $studySubModuleLocations
     */
    public function __construct($studySubModuleName, $studySubModuleID, array $studySubModuleLessons, array $studySubModuleTachers, array $studySubModuleStudents, array $studySubModuleLocations)
    {
        $this->studySubModuleName = $studySubModuleName;
        $this->studySubModuleID = $studySubModuleID;
        $this->studySubModuleLessons = $studySubModuleLessons;
        $this->studySubModuleTachers = $studySubModuleTachers;
        $this->studySubModuleStudents = $studySubModuleStudents;
        $this->studySubModuleLocations = $studySubModuleLocations;
    }

    /**
     * Get the name of the study sub module
     * @return mixed
     */
    public function getStudySubModuleName()
    {
        return $this->studySubModuleName;
    }

    /**
     * Set the name of the study sub module
     * @param mixed $studySubModuleName
     */
    public function setStudySubModuleName($studySubModuleName)
    {
        $this->studySubModuleName = $studySubModuleName;
    }

    /**Get the ID of the study sub module.
     * @return mixed
     */
    public function getStudySubModuleID()
    {
        return $this->studySubModuleID;
    }

    /**
     * Set the ID of the study sub module.
     * @param mixed $studySubModuleID
     */
    public function setStudySubModuleID($studySubModuleID)
    {
        $this->studySubModuleID = $studySubModuleID;
    }

    /**
     * Get the Lesssons of the study sub module.
     * @return array
     */
    public function getStudySubModuleLessons()
    {
        return $this->studySubModuleLessons;
    }

    /**
     * Set the Lessons of the study sub module.
     * @param array $studySubModuleLessons
     */
    public function setStudySubModuleLessons($studySubModuleLessons)
    {
        $this->studySubModuleLessons = $studySubModuleLessons;
    }

    /**
     * Get the teachers of the study sub module.
     * @return array
     */
    public function getStudySubModuleTachers()
    {
        return $this->studySubModuleTachers;
    }

    /**
     * Set the Teachers of the study sub module.
     * @param array $studySubModuleTachers
     */
    public function setStudySubModuleTachers($studySubModuleTachers)
    {
        $this->studySubModuleTachers = $studySubModuleTachers;
    }

    /**
     * Get the Students of the study sub module.
     * @return array
     */
    public function getStudySubModuleStudents()
    {
        return $this->studySubModuleStudents;
    }

    /**
     * Set the Strudents of the study sub module.
     * @param array $studySubModuleStudents
     */
    public function setStudySubModuleStudents($studySubModuleStudents)
    {
        $this->studySubModuleStudents = $studySubModuleStudents;
    }

    /**
     * Get the Locations of the study sub module.
     * @return array
     */
    public function getStudySubModuleLocations()
    {
        return $this->studySubModuleLocations;
    }

    /**
     * Set the Locations of the study sub module.
     * @param array $studySubModuleLocations
     */
    public function setStudySubModuleLocations($studySubModuleLocations)
    {
        $this->studySubModuleLocations = $studySubModuleLocations;
    }

    /**
     * Add a new Lesson.
     * @param Lesson $studySubModuleLessons
     */
    public function addStudySubModuleLessons(Lesson $studySubModuleLessons) {
        array_push($this->studySubModuleLessons = $studySubModuleLessons);

    }

    /**
     * Add a new Teacher.
     * @param Teacher $studySubModuleTachers
     */
    public function addStudySubModuleTachers(Teacher $studySubModuleTachers) {
        array_push($this->studySubModuleTachers = $studySubModuleTachers);

    }

    /**
     * Add a new Student.
     * @param Student $studySubModuleStudents
     */
    public function addStudySubModuleStudents(Student $studySubModuleStudents) {
        array_push($this->studySubModuleStudents = $studySubModuleStudents);

    }

    /**
     * Add a new Location.
     * @param Location $studySubModuleStudents
     */
    public function addStudySubModuleLocations(Location $studySubModuleLocations) {
        array_push($this->studySubModuleLocations = $studySubModuleLocations);

    }
}