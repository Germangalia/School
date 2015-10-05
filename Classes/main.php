<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 5/10/15
 * Time: 20:25
 */
use Com\Iesebre\Dam2\germangalia\Persons\Person;

require "/home/ggalia84/Code/School/Classes/Persons/Person.php";

$person = new Person();

$person->type = "Pepita";
$person->setGivenName("Pepita Palotes");

$person->render();