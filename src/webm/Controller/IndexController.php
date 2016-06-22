<?php
/**
 * Created by PhpStorm.
 * User: darke_000
 * Date: 18.06.2016
 * Time: 3:47
 */

namespace webm\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class IndexController
{
    public function showRecent(Request $request, Application $app)
    {
        $catalogs = scandir('webm/');
        $catalogs = array_diff($catalogs, array('.', '..',));

        return $app['twig']->render('index.twig', array ('catalogs' => $catalogs));
    }
}