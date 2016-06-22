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
        $this->previewPath = 'webm/'.$this->catalog.'/previews/'.$this->name.'.jpg';
        if (!file_exists("webm/$this->catalog/previews"))
            mkdir("webm/$this->catalog/previews");

        if (!file_exists($this->previewPath))
            shell_exec("ffmpeg -ss 00:00:00 -i webm/$this->catalog/$this->name -vf scale=320:180 -frames:v 1 $this->previewPath");
    }
}