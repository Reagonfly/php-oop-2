<?php
class FoodCat extends ProductCat
{
    public $weight;
    public $composure;

    public function __construct($name, $price, $imgs, Category $category, $weight, $composure)
    {
        parent::__construct($name, $price, $imgs, $category);
        $this->weight = $weight;
        $this->composure = $composure;
    }
}
