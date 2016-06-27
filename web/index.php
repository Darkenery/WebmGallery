<?php
/**
 * Created by PhpStorm.
 * User: darke_000
 * Date: 18.06.2016
 * Time: 1:35
 */

require_once '../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

require '../src/app.php';
require '../src/db.php';
require '../src/routes.php';

$app -> run();
