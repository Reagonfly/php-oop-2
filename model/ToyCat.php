<?php
class ToyCat extends ProductCat
{
    public $size;
    public $feature;

    //i get category from category.php file
    public function __construct($name, $price, $imgs, Category $category, $size, $feature)
    {
        parent::__construct($name, $price, $imgs, $category);
        $this->size = $size;
        $this->feature = $feature;
    }
}
