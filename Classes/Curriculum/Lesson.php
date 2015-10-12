<?php
/**
 * Created by PhpStorm.
 * Users: ggalia84
 * Date: 12/10/15
 * Time: 11:57
 */

namespace Com\Iesebre\Dam2\germangalia\Curriculum;


class Lesson extends StudySubModule
{

    /**
     * Keep the name of the lesson.
     * @var
     */
    public $nameLesson;

    /**
     * Keep the ID of the lesson.
     * @var
     */
    public $IDLesson;

    /**
     * Keep the hours duration of the lesson.
     * @var array
     */
    public $hoursLesson;

    /**
     * Keep the description of the lesson
     * @var array
     */
    public $descriptionLesson;

    /**
     * Lesson constructor.
     * @param $nameLesson
     * @param $IDLesson
     * @param $hoursLesson
     * @param $descriptionLesson
     */
    public function __construct($nameLesson, $IDLesson, $hoursLesson, $descriptionLesson)
    {
        $this->nameLesson = $nameLesson;
        $this->IDLesson = $IDLesson;
        $this->hoursLesson = $hoursLesson;
        $this->descriptionLesson = $descriptionLesson;
    }

    /**
     * Get the name of the lesson.
     * @return mixed
     */
    public function getNameLesson()
    {
        return $this->nameLesson;
    }

    /**
     * Set the name of the lesson.
     * @param mixed $nameLesson
     */
    public function setNameLesson($nameLesson)
    {
        $this->nameLesson = $nameLesson;
    }

    /**
     * Get the ID of the lesson.
     * @return mixed
     */
    public function getIDLesson()
    {
        return $this->IDLesson;
    }

    /**
     * Set the ID of the lesson.
     * @param mixed $IDLesson
     */
    public function setIDLesson($IDLesson)
    {
        $this->IDLesson = $IDLesson;
    }

    /**
     * Get the Hours of the lesson.
     * @return mixed
     */
    public function getHoursLesson()
    {
        return $this->hoursLesson;
    }

    /**
     * Set the Hours of the lesson.
     * @param mixed $hoursLesson
     */
    public function setHoursLesson($hoursLesson)
    {
        $this->hoursLesson = $hoursLesson;
    }

    /**
     * Get the description of the lesson.
     * @return mixed
     */
    public function getDescriptionLesson()
    {
        return $this->descriptionLesson;
    }

    /**
     * Set the description of the lesson.
     * @param mixed $descriptionLesson
     */
    public function setDescriptionLesson($descriptionLesson)
    {
        $this->descriptionLesson = $descriptionLesson;
    }

}