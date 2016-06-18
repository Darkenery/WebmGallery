<?php
/**
 * Created by PhpStorm.
 * User: darke_000
 * Date: 18.06.2016
 * Time: 15:38
 */

namespace webm\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use webm\Entity\Webm;

class CatalogController
{
    public function showCatalog($catalog, Request $request, Application $app)
    {
        $webms = array();
        $list = scandir('webm/' . $catalog);
        $list = array_diff($list, array('.', '..', 'previews'));

        foreach ($list as $webm)
            $webms[] = new Webm($webm, $catalog);

        $catalogs = scandir('webm/');
        $catalogs = array_diff($catalogs, array('.', '..',));


        return $app['twig']->render('catalog.twig', array('webms' => $webms, 'request' => $request, 'catalogs' => $catalogs));
    }
}