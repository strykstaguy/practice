<?php

namespace App\Tests\Customer;

use App\Customer\CustomerFactory;
use App\Customer\Basic;
use PHPUnit_Framework_TestCase;

class CustomerFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testFactoryBasic()
    {
        $customer = CustomerFactory::factory('basic', 1, 'han', 'solo', 'han@solo.com');
        $this->assertInstanceOf(Basic::class, $customer, 'basic should create a Customer\Basic object.');

        $expectedBasicCustomer = new Basic(1, 'han', 'solo', 'han@solo.com');
        $this->assertEquals($customer, $expectedBasicCustomer, 'Customer object is not as expected.');
    }
}