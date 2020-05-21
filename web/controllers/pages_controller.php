<?php
require_once('controllers/base_controller.php');
require_once('models/product.php');

class PagesController extends BaseController
{
    function __construct()
    {
        $this->folder = 'pages';
    }

    public function home()
    {
        $products = Product::all(10);
        $foreigns = Product::getForeignProducts();
        $data = array(
            'products' => $products,
            'foreigns' => $foreigns
        );
        // $data = array('products' => '1');
        $this->render('index', $data);
    }

    public function error()
    {
        $this->render('error');
    }
}