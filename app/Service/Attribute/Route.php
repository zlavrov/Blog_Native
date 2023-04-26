<?php

namespace App\Service\Attribute;

class Route {

    public $url;

    public $method;

    public function __construct(string|null $url = null, string|null $method = null) {
        
        $this->url = $url;
        $this->method = $method;
    }
}
