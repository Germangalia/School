<?php
/**
 * Created by PhpStorm.
 * Users: ggalia84
 * Date: 5/10/15
 * Time: 20:25
 */

require_once __DIR__ . '/vendor/autoload.php';
use Com\Iesebre\Dam2\germangalia\Persons\Person;

//Create a person object.
$person = new Person();

//Add variables attributes.
$person->type = "Pepita";
$person->setGivenName("Pepita Palotes");

//Print name of person like a method render() of Person class.
$person->render();