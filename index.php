<?php
require "local/vendor/autoload.php";

use myclass\belveb\util\myClass;
myClass::myTest();

exit;


$inst = singleton::getInstance();
$inst->setProperty("name", "ivan");

unset($inst);

$inst_2 = singleton::getInstance();
$inst_2->getProperty();

$cat = Animal::init('Lion');
$cat->voice();

echo "composer"; exit;


//var_dump(mail("evasiluk@gmail.com", "raspberry", "pi"));

//phpinfo();
//require_once "classes/myClass.php";
//use myclass\belveb\util;
//util\myClass::myTest();

//_______________


require_once "classes/singleton.php";
require_once "classes/factoryMethod.php";
require_once "classes/builder.php";

//___________________________________

$inst = singleton::getInstance();
$inst->setProperty("name", "ivan");

unset($inst);

$inst_2 = singleton::getInstance();
$inst_2->getProperty();

//__________________________________
$cat = Animal::init('Lion');
$cat->voice();

//__________________________________
echo "<br>";
$query = new mysqlGenerator();
$sql = $query->select("users", ["name", "age", "position"])->where("position", "programmer")->where("name", "ivan")->limit(1,10)->getSQL();

echo $sql;

?>

