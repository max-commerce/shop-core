<?php

namespace maxcom\core\models\interfaces;

interface CatalogCategoryInterface
{

    public function getId();

    public function getStatus();

    public function getUrl();

    public function getParent();
    
    public function getChilds();

}