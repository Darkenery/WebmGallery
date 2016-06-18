<?php
/**
 * Created by PhpStorm.
 * User: darke_000
 * Date: 18.06.2016
 * Time: 1:38
 */


$app->get("/", 'webm\Controller\IndexController::showRecent');
$app->get("/{catalog}", 'webm\Controller\CatalogController::showCatalog');
$app->get("/{catalog}/{webm}", 'webm\Controller\WebmController::showWebm');

//$app->get('/{catalog}', \webm\Controller\IndexController::indexAction());

