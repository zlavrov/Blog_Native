<?php

namespace App\Config;

class AppConfig {

    public function getController() {
        return [
            "controllerDir" => "app/Controller",
            "partClassName" => "App\\Controller\\"
        ];
    }

    public function getModel() {
        return [
            "modelDir" => "app/Model",
            "partClassName" => "App\\Model\\"
        ];
    }

    public function getEntity() {
        return [
            "entityDir" => "app/Entity",
            "partClassName" => "App\\Entity\\"
        ];
    }
}
