<?php

namespace App;

class Book
{
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct(
        int $isbn,
        string $title,
        string $author,
        int $available = 0
    ) {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    /**
     * @return int
     */
    public function getIsbn(): int
    {
        return $this->isbn;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return int
     */
    public function isAvailable(): int
    {
        return $this->available;
    }

    public function getPrintableTitle(): string
    {
        $result = '<i>' . $this->title
            . '</i> - ' . $this->author;
        if (!$this->available) {
            $result .= ' <b> Not available</b>';
        }
        return $result;
    }

    public function getCopy(): bool
    {
        if ($this->available < 1) {
            return false;
        } else {
            $this->available--;
            return true;
        }
    }

    public function addCopy()
    {
        $this->available++;
    }
}