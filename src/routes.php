<?php
/**
 * Created by PhpStorm.
 * User: darke_000
 * Date: 18.06.2016
 * Time: 1:38
 */


$app->get("/new/", 'webm\Controller\IndexController::showNew')->bind('new');
$app->get("/new/{webm}", 'webm\Controller\NewWebmController::showWebm')->bind('newWebm');
$app->get("/{catalog}/", 'webm\Controller\CatalogController::showCatalog')->bind('catalog');
$app->get("/{catalog}/{wwebm}", 'webm\Controller\WebmController::showWebm')->bind('webm');

$app->get("/", function() use ($app){
    return $app->redirect($app['url_generator']->generate('new'));
});

