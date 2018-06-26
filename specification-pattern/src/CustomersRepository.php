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

    public function bySpecification($specification) {

        $customers = Customer::query();

        $customers = $specification->asScope($customers);

        return $customers->get();

    }

    public function all()
    {
        return Customer::all();
    }

}