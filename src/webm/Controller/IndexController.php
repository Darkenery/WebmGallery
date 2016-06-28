<?php
/**
 * Created by PhpStorm.
 * User: darke_000
 * Date: 18.06.2016
 * Time: 3:47
 */

namespace webm\Controller;

use Silex\Application;


class IndexController
{
    public function showNew(Application $app)
    {
        $catalogs = scandir('webm/');
        $catalogs = array_diff($catalogs, array('.', '..',));

        $lastWebms = $app['repository.webm']->getLast(100);

        return $app['twig']->render('recent.twig', array ('catalogs' => $catalogs, 'lastWebms' => $lastWebms));
    }
}