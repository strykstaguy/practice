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

$book1 = new Book(1, "Red Rising", "Pierce Brown", 12);
$book2 = new Book(2, "Morning Star", "Pierce Brown", 1);

//$string = (string) $book1; // Title - Author Not Available

//echo $string;

$customer1 = new Customer(1, 'Cody', 'Benner', 'strykstaguy@gmail.com');
$customer2 = new Customer(2, 'Josh', 'Wilson', 'joshwilson0011@gmail.com');
Customer::getLastId();
echo $customer1::getLastId();
//echo $book1->getPrintableTitle();
/*
if ($book1->getCopy()) {
    echo 'Here is your copy.';
    echo "There are now " . $book1->available . " copies left";
} else {
    echo 'Sorry, that book is not available.';
}
*/