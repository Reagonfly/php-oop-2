<?php
class ProductCat
{
    public $name;
    public $price;
    public $imgs;
    public $category;

    public function __construct($name, $price, $imgs, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->imgs = $imgs;
        $this->category = $category;
    }
}
