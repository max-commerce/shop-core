<?php

namespace maxcom\core\interfaces;

interface CatalogCategoryInterface
{

    public function getId();

    public function getStatus();

    public function getUrl();

    public function getParent();
    
    public function getChilds();

}