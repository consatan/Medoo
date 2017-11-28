<?php
/*!
 * Medoo database framework
 * https://medoo.in
 * Version 1.5.1
 *
 * Copyright 2017, Angel Lai
 * Released under the MIT license
 */

namespace Medoo;

class Raw
{
    public $map;
    public $value;

    public function __construct($value, $map)
    {
        $this->map = $map;
        $this->value = $value;
    }
}
