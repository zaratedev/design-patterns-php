<?php
/**
 * Created by PhpStorm.
 * User: zaratedev
 * Date: 25/06/18
 * Time: 04:28 PM
 */

namespace App;

interface BookInterface
{
    public function open();

    public function turnPage();
}