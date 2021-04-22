<?php
declare(strict_types=1);

class ProductsContainer
{
    private array $products = [];

    public function __construct()
    {
        //populate array with some starting items
        $this->products[] = Product::newProduct('A guide to brewing the perfect Duvel',
            3.5,
            .21);
        $this->products[] = Product::newProduct('The secrets of the world wide web',
            9000,
            .21);
    }

    public function getAll() : array
    {
        return $this->products;
    }

    public function AddProduct(Product $product) : void
    {
        $this->products[] = $product;
    }
}