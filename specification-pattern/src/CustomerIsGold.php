<?php
/**
 * Created by PhpStorm.
 * User: zaratedev
 * Date: 26/06/18
 * Time: 10:14 AM
 */
class CustomerIsGold {

    public function isSatisfiedBy(Customer $customer) {
        return $customer->type() == 'gold';
    }

    public function asScope($query) {
        return $query->where('type', 'gold');
    }
}