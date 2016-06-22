<?php
/**
 * Created by PhpStorm.
 * User: darke_000
 * Date: 18.06.2016
 * Time: 1:38
 */


$app->get("/", 'webm\Controller\IndexController::showRecent')->bind('index');
$app->get("/{catalog}/", 'webm\Controller\CatalogController::showCatalog')->bind('catalog');
$app->get("/{catalog}/{wwebm}", 'webm\Controller\WebmController::showWebm')->bind('webm');


//$app->get('/{catalog}', \webm\Controller\IndexController::indexAction());

