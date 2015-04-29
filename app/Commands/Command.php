<?php namespace Topmade\Commands;

abstract class Command
{
    public function toArray()
    {
        $result = [];

        foreach (get_object_vars($this) as $prop => $value) {
            $result[snake_case($prop)] = $value;
        }

        return $result;
    }
}
