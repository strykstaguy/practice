<?php

use App\Book;
use App\Customer;
use App\Customer\Basic;
use App\Customer\Premium;
use App\Customer\CustomerFactory;
use App\Utils\Config;
/*
spl_autoload_register(function ($className) {

    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $filename = $_SERVER['DOCUMENT_ROOT'] . '/' . $className . '.php';
    prettyPrint($filename);
    include_once $filename;

});
*/
function checkIfValid(Customer $customer, array $books): bool
{
    return $customer->getAmountToBorrow() >= count($books);
}

//$book1 = new Book(1, "Red Rising", "Pierce Brown", 12);
//$book2 = new Book(2, "Morning Star", "Pierce Brown", 1);

/*
$basic1 = new Basic(-1, "name", "surname", "email");
$basic2 = new Premium(null, "name", "surname", "email");
prettyPrint($basic1->getId()); // 1
prettyPrint($basic2->getId()); // 2
*/

//CustomerFactory::factory('basic', 2, 'mary', 'poppins', 'mary@poppins.com');
//CustomerFactory::factory('premium', null, 'james', 'bond', 'james@bond.com');

$dbConfig = Config::getInstance()->get('db');
$db = new PDO('mysql:host=127.0.0.1;dbname=bookstore', $dbConfig['user'], $dbConfig['password']);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$rows = $db->query('SELECT * FROM book ORDER BY title');
foreach ($rows as $row) {
    prettyPrint($row);
}

function prettyPrint($var, $varDump = false)
{
    echo "<pre style='font-size:16px;'>";
    if ($varDump) {
        var_dump($var);
    } else {
        print_r($var);
    }
    echo "</pre>";
}
//$customer2 = new Customer(7, 'James', 'Bond', 'james@bond.com');
//var_dump(checkIfValid($customer2, [$book1])); // fails

//echo $book1->getPrintableTitle();
/*
if ($book1->getCopy()) {
    echo 'Here is your copy.';
    echo "There are now " . $book1->available . " copies left";
} else {
    echo 'Sorry, that book is not available.';
}
*/