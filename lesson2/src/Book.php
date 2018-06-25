<?php
/**
 * Created by PhpStorm.
 * User: zaratedev
 * Date: 25/06/18
 * Time: 04:12 PM
 */

namespace App;


class Book implements BookInterface
{
    public function open() {
        var_dump('open book');
    }

    public function turnPage() {
        var_dump('turning page of the book');
    }
}