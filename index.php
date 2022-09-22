<?php

class Basket
{
    public $items = [];
    public $items_count;
    public $sum;

    public function add_item(Product $product)
    {
        $this->items_count += 1;
        $this->items[] = $product;
    }
}

class Order extends Basket
{
    public function get_order()
    {
        echo "Всего" . $this->items_count . ", на сумму " . $this->sum;
    }
}

class Product
{
    public $name;
    public $properties;
    public $property;
}

class Reviews
{
    public $caption;
    public $text;
}

class User
{
    public $id;
    public $nickname;
    public $first_name;
}

class Callback
{
    public $caption;
    public $text;
    public $rating;
}

