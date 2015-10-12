<?php namespace Com\Iesebre\Dam2\germangalia\Persons;

/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 5/10/15
 * Time: 17:50
 */
class Person
{

    /**
     * Type name.
     * @var string
     */
    public $type = "Persona";

    /**
     * ID of person.
     * @var
     */
    public $personalId;

    /**
     * Name of person.
     * @var
     */
    public $givenName;

    /**
     * First Surname of person.
     * @var
     */
    public $sn1;

    /**
     * Second surname of person.
     * @var
     */
    public $sn2;

    /**
     * Email of person.
     * @var
     */
    public $email;

    /**
     * Address  of person.
     * @var
     */
    public $postalAddress;

    /**
     * Locality of person.
     * @var
     */
    public $locality;

    /**
     * Postal code of person.
     * @var
     */
    public $postalCode;

    /**
     * Person constructor.
     * @param string $type
     * @param $personalId
     * @param $givenName
     * @param $sn1
     * @param $sn2
     * @param $email
     * @param $postalAddress
     * @param $locality
     * @param $postalCode
     * @param $state
     * @param $country
     */
    public function __construct($type, $personalId, $givenName, $sn1, $sn2, $email, $postalAddress, $locality, $postalCode, $state, $country)
    {
        $this->type = $type;
        $this->personalId = $personalId;
        $this->givenName = $givenName;
        $this->sn1 = $sn1;
        $this->sn2 = $sn2;
        $this->email = $email;
        $this->postalAddress = $postalAddress;
        $this->locality = $locality;
        $this->postalCode = $postalCode;
        $this->state = $state;
        $this->country = $country;
    }


    /**
     * Get e-mail.
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * State of person.
     * @var
     */
    public $state;

    /**
     * Country of person.
     * @var
     */
    public $country;


    /**
     * Get given name.
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * Set given name.
     * @param mixed $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * Get Personal ID.
     * @return mixed
     */
    public function getPersonalId()
    {
        return $this->personalId;
    }

    /**
     * Set Personal ID.
     * @param mixed $personalId
     */
    public function setPersonalId($personalId)
    {
        $this->personalId = $personalId;
    }


    /**
     * Set e-mail.
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get Address.
     * @return mixed
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Set Address.
     * @param mixed $postalAddress
     */
    public function setPostalAddress($postalAddress)
    {
        $this->postalAddress = $postalAddress;
    }

    /**
     * Get Locality.
     * @return mixed
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Set Locality.
     * @param mixed $locality
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    /**
     * Get Postal code.
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set postal code.
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Get State.
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set State.
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * Get country.
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set country.
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Get First Surname.
     * @return mixed
     */
    public function getSn1()
    {
        return $this->sn1;
    }

    /**
     * Set First Surname.
     * @param mixed $sn1
     */
    public function setSn1($sn1)
    {
        $this->sn1 = $sn1;
    }

    /**
     * Get Second Surname.
     * @return mixed
     */
    public function getSn2()
    {
        return $this->sn2;
    }

    /**
     * Set Second surname.
     * @param mixed $sn2
     */
    public function setSn2($sn2)
    {
        $this->sn2 = $sn2;
    }

    /**
     * Print the name of the person.
     */
    public function render()
    {
        echo "La {$this->type} té el nom " . $this->getGivenName() . "\n";
    }
}