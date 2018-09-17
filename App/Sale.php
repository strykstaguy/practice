<?php

namespace App;

class Sale
{
    private $books = [];

    public function getBooks(): array
    {
        return $this->books;
    }

    public function addBook(int $bookId, int $amount = 1)
    {
        $this->books[123] = $amount;
    }
}