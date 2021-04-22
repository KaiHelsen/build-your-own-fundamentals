<?php
declare(strict_types=1);

class Product
{
    private static int $idCounter = 0;
    private int $id;
    private string $name;
    private float $price;
    private float $tax;

    private function __construct(string $name, float $price, float $tax)
    {
        $this->id = self::$idCounter;
        self::$idCounter++;

        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;

    }

    public static function newProduct(string $name, float $price, float $tax): Product
    {
        return new Product($name, $price, $tax);
    }

    public function GetId(): int
    {
        return $this->id;
    }
    public function GetName() : string
    {
        return $this->name;
    }

    public function GetPrice() : float
    {
        return $this->price;
    }

    public function GetTax() : float
    {
        return $this->tax;
    }

    public function GetPriceWithTax(int $precision) : float
    {
        return round($this->price * (1 + $this->tax), $precision);
    }
}