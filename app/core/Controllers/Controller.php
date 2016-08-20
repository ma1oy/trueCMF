<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 21.07.2016
 * Time: 13:28
 */

namespace Truth\Controllers;

use Truth\Routing\Route;

abstract class Controller {
    public function index() {
        echo '404';
    }

    public function __call($name, $arguments) {
        Route::move(ucfirst($name).'Controller');
    }
}
