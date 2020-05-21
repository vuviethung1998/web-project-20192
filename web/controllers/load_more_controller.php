<?php
require_once('controllers/base_controller.php');
require_once('models/product.php');

class LoadMoreController extends BaseController
{
    public function index()
    {
        $from = $_GET['from'];
        $to = $_GET['to'];

        $products = Product::getRange($from, $to);
        foreach($products as $product) {
            echo ' <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">';
            echo ' <div class="item">';
            echo  '<div class="product-thumb">';
            echo   ' <div class="image product-imageblock">';
            echo '<a href="product.html">';
            echo "<img src=".$product->img." alt='iPod Classic' title='iPod Classic' class='img-responsive' />" ;
            echo "<img src=".$product->img." alt='iPod Classic' title='iPod Classic' class='img-responsive' />";
            echo '</a>';
            echo '<ul class="button-group">
            <li>
              <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
            </li>
            <li>
              <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product"><i class="fa fa-exchange"></i></button>
            </li>
            <li>
              <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="fa fa-eye"></i></button>
            </li>
            <li>
              <button type="button" class="addtocart-btn" title="Add to Cart">Add to Cart</button>
            </li>
          </ul>
        </div>';
            echo '  <div class="caption product-detail">
      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>';
            echo "<h4 class='product-name'><a href='#' title=".$product->product_name.">$product->product_name</a></h4>
      <p class='price product-price'>".$product->price." đồng<span class='less'>$150.00</span><span class='price-tax'>Ex
      Tax: $100.00</span></p>";
            echo '</div>
            </div>
          </div>
        </div>';
        }
    }
}
