<?php

namespace Controllers;

use Model\Servicio;

class APIController {
    public static function index() {
        $servicio = Servicio::all();

        echo json_encode($servicio);
    }
} 