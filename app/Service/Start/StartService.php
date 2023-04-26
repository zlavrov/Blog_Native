<?php

namespace App\Service\Start;

use App\Model\DBActionModel;
use App\Service\Router\RouterService;

class StartService {

    public function startApp() {

        $response = (new DBActionModel())->checkDataBaseConnect();
        if($response['status']) {
            (new RouterService())->routeMethod();
        } else {
            var_dump($response);
        }
    }
}