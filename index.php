<?php

use App\Book;
use App\Customer;
use App\Customer\Basic;

spl_autoload_register(function($className) {

    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $filename = $_SERVER['DOCUMENT_ROOT'] . '/' . $className . '.php';
    //var_dump($filename);
    include_once $filename;

});

function checkIfValid(Customer $customer, array $books): bool
{
    return $customer->getAmountToBorrow() >= count($books);
}

$book1 = new Book(1, "Red Rising", "Pierce Brown", 12);
$book2 = new Book(2, "Morning Star", "Pierce Brown", 1);

$basic1 = new Basic(1, "name", "surname", "email");
$basic2 = new Basic(null, "name", "surname", "email");
var_dump($basic1->getId()); // 1
var_dump($basic2->getId()); // 2

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