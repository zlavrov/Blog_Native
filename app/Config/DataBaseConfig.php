<?php

namespace App\Config;

class DataBaseConfig {

    public function getConfig() {
        return [
            "host" => "localhost",
            'port' => "3306",
            "user" => "root",
            "pass" => "password",
            "base" => "Book"
        ];
    }
}
