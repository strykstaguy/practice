<?php

namespace Bookstore;

class Customer extends Person
{
    private $id;
    private $email;
    private static $lastId = 0;

    public function __construct(
        int $id,
        string $firstname,
        string $surname,
        string $email
    ) {
        parent::__construct($firstname, $surname);
        if ($id == null) {
            $this->id = ++self::$lastId;
        } else {
            $this->id = $id;
            if ($id > self::$lastId) {
                self::$lastId = $id;
            }
            $this->email = $email;
        }
    }

    public static function getLastId(): int
    {
        return self::$lastId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}