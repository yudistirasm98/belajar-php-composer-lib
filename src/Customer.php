<?php

namespace ProgramerZamanNow\Belajar;

class Customer
{
    public function __construct(private string $name)
    {
    }
    public function sayHello(string $name): String
    {
        return "Hello $this->name, My Name is $name";
    }
}