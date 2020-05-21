<?php
class Product
{
    public $product_id;
    public $product_name;
    public $img;
    public $price;
    public $description;
    public $brand;
    public $quantity;

    function __construct($product_id, $product_name, $img, $price, $description, $brand, $quantity)
    {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->img = $img;
        $this->price = $price;
        $this->description = $description;
        $this->brand = $brand;
        $this->quantity = $quantity;
    }

    static function all($limit)
    {
        $list = [];
        $db = DB::getInstance();
        $req = '';
        if ($limit != -1) {
            $req = $db->query("SELECT * FROM products LIMIT $limit");
        } else {
            $req = $db->query("SELECT * FROM products");
        }

        foreach ($req->fetchAll() as $item) {
            $list[] = new Product($item['product_id'], $item['product_name'], $item['img'], $item['price'], $item['description'], $item['brand'], $item['quantity'] );
        }

        return $list;
    }

    static function getRange($from, $to)
    {
        $list = [];
        $db = DB::getInstance();
        $req = '';
        $req = $db->query("SELECT * FROM products WHERE product_id BETWEEN $from AND $to");


        foreach ($req->fetchAll() as $item) {
            $list[] = new Product($item['product_id'], $item['product_name'], $item['img'], $item['price'], $item['description'], $item['brand'], $item['quantity'] );
        }

        return $list;
    }

    static function getForeignProducts()
    {
        $list = [];
        $db = DB::getInstance();
        $req = '';
        $req = $db->query("SELECT * FROM products  LEFT OUTER JOIN product_categories ON products.product_id = product_categories.product_id AND product_categories.category_id = 17 LIMIT  10");


        foreach ($req->fetchAll() as $item) {
            $list[] = new Product($item['product_id'], $item['product_name'], $item['img'], $item['price'], $item['description'], $item['brand'], $item['quantity'] );
        }

        return $list;
    }
}
