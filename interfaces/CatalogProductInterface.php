<?php

namespace maxcom\core\models\interfaces;

interface CatalogProductInterface
{

    public function getId();

    public function getStatus();

    public function getUrl();

    public function getCategory();

}