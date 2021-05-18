<?php


class Node
{
    public $value;
    public $next;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}