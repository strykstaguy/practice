<?php

use Bookstore\Book;
use Bookstore\Customer;

function __autoload($classname)
{
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/src/' . $directory . '.php';
    require_once($filename);
}

function checkIfValid(Customer $customer, array $books): bool
{
    return $customer->getAmountToBorrow() >= count($books);
}

$book1 = new Book(1, "Red Rising", "Pierce Brown", 12);
$book2 = new Book(2, "Morning Star", "Pierce Brown", 1);

$customer1 = new Basic(5, 'John', 'Doe', 'johndoe@mail.com');
var_dump(checkIfValid($customer1,
    [$book1])); // ok
$customer2 = new Customer(7, 'James', 'Bond', 'james@bond.com');
var_dump(checkIfValid($customer2, [$book1])); // fails
//echo $book1->getPrintableTitle();
/*
if ($book1->getCopy()) {
    echo 'Here is your copy.';
    echo "There are now " . $book1->available . " copies left";
} else {
    echo 'Sorry, that book is not available.';
}
*/