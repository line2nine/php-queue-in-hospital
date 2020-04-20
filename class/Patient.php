<?php

class Patient
{
    protected $name;
    protected $code;

    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
    }
}