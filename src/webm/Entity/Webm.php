<?php
/**
 * Created by PhpStorm.
 * User: darke_000
 * Date: 18.06.2016
 * Time: 1:56
 */

namespace webm\Entity;


class Webm
{
    protected $name;
    protected $catalog;
    protected $previewPath;

    public function __construct($name, $catalog)
    {
        $this->name = $name;
        $this->catalog = $catalog;
        $this->makePreview();
    }

    public function getName()
    {
        return $this->name;
    }


    public function getCatalog()
    {
        return $this->catalog;
    }

    public function getPreviewPath()
    {
        return $this->previewPath;
    }

    public function makePreview()
    {
        if (!file_exists('/preview/'.$this->name.'.jpg'))
            //ffmpeg create preview
        ;
        $this->previewPath = 'webm/'.$this->catalog.'/previews/'.$this->name.'.jpg';
    }
}