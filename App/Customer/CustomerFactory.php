<?php

namespace App\Customer;

use App\Customer;

class CustomerFactory
{
    public static function factory(string $type, int $id, string $firstname, string $surname, string $email): Customer
    {
        $classname = __NAMESPACE__ . '\\' . ucfirst($type);
        if (!class_exists($classname)) {
            throw new \InvalidArgumentExcecption('Wrong type.'); }
        return new $classname($id, $firstname, $surname, $email);
    }
}