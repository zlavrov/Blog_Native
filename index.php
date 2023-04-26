<?php
session_start();
use App\Service\Start\StartService;

require_once __DIR__ . "/vendor/autoload.php";

(new StartService())->startApp();
