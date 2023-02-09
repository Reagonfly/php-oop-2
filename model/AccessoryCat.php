<?php
class AccessoryCat extends ProductCat
{
    public $material;
    public $size;

    public function __construct($name, $price, $imgs, Category $category, $material, $size)
    {
        parent::__construct($name, $price, $imgs, $category);
        $this->material = $material;
        $this->size = $size;
    }
}
