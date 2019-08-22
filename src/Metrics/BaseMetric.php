<?php

namespace LaravelBi\LaravelBi\Metrics;

abstract class BaseMetric {
    
    public $key;
    public $name;

    public function __construct($key, $name)
    {
        $this->key  = $key;
        $this->name = $name;
    }
    static public function create($key, $name)
    {
        return new static($key, $name);
    }

}