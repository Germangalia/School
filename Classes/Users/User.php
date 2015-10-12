<?php namespace Com\Iesebre\Dam2\germangalia\Users;

/**
 * Created by PhpStorm.
 * Users: ggalia84
 * Date: 12/10/15
 * Time: 12:13
 */

class User
{

    /**
     * Keep the user name.
     * @var
     */
    public $userName;

    /**
     * Keep the user password.
     * @var
     */
    public $userPassword;

    /**
     * Users constructor.
     * @param $userName
     * @param $userPassword
     */
    public function __construct($userName, $userPassword)
    {
        $this->userName = $userName;
        $this->userPassword = $userPassword;
    }

    /**
     * Get the user name.
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set the user name.
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * Get the user password.
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set the user password.
     * @param mixed $userPassword
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
    }

}