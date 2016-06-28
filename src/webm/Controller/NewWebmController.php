<?php
/**
 * Created by PhpStorm.
 * User: darke_000
 * Date: 28.06.2016
 * Time: 21:51
 */

namespace webm\Controller;

use Silex\Application;

class NewWebmController
{
    public function showWebm($webm, Application $app)
    {
        $catalogs = scandir('webm/');
        $catalogs = array_diff($catalogs, array('.', '..',));

        $lastWebms = $app['repository.webm']->getLast(20);

        $catalog = $app['repository.webm']->findCatalog($webm);

        return $app['twig']->render('newwebm.twig', array( 'catalogs' => $catalogs, 'lastWebms' => $lastWebms, 'catalog' => $catalog, 'wwebm' => $webm, ));
    }
}