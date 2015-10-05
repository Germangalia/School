<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 5/10/15
 * Time: 20:25
 */

require_once __DIR__ . '/vendor/autoload.php';
use Com\Iesebre\Dam2\germangalia\Persons\Person;


$person = new Person();

$person->type = "Pepita";
$person->setGivenName("Pepita Palotes");

$person->render();