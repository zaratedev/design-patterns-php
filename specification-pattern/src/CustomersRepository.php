<?php
/**
 * Created by PhpStorm.
 * User: zaratedev
 * Date: 26/06/18
 * Time: 10:39 AM
 */

class CustomersRepository
{
    protected $customers;

    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }

    public function bySpecification($specification) {
        $matches = [];

        foreach ($this->customers as $customer) {
            if ($specification->isSatisfiedBy($customer)) {
                $matches[] = $customer;
            }
        }

        return $matches;

    }

    public function all()
    {
        return $this->customers;
    }

}