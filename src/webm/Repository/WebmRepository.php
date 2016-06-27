<?php
/**
 * Created by PhpStorm.
 * User: darke_000
 * Date: 18.06.2016
 * Time: 2:11
 */

namespace webm\Repository;

use Doctrine\DBAL\Connection;
use webm\Entity\Webm;

class WebmRepository
{
    protected $db;

    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    public function writeToDB($catalog, $name)
    {   $stmt = $this->db->executeQuery('SELECT name FROM webm WHERE name = ?', array($name));
        if (!$stmt->rowCount())
            $this->db->insert('webm', array ('catalog' => $catalog, 'name' => $name));
    }
}