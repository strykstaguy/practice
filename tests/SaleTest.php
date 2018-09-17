<?php

namespace App\Tests\Domain;

use App\Sale;
use PHPUnit_Framework_TestCase;

class SaleTest extends PHPUnit_Framework_TestCase
{
    public function testWhenCreatedBookListIsEmpty()
    {
        $sale = new Sale();
        $this->assertEmpty($sale->getBooks());
    }

    public function testWhenAddingABookIGetOneBook()
    {
        $sale = new Sale();
        $sale->addBook(123);
        $this->assertSame($sale->getBooks(), [123 => 1]);
    }

    public function testSpecifyAmountBooks()
    {
        $sale = new Sale();
        $sale->addBook(123, 5);
        $this->assertSame($sale->getBooks(), [123 => 5]);
    }
}