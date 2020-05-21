<div class="mainbanner">
    <div id="main-banner" class="owl-carousel home-slider">
        <div class="item"> <a href="#"><img src="../../assets/image/banners/banner1.png" style="width: 100%; height: 60%;" alt="main-banner1" /></a> </div>
        <div class="item"> <a href="#"><img src="../../assets/image/banners/banner2.png" alt="main-banner2" style="width: 100%; height: 60%;" alt="main-banner1" /></a> </div>
        <div class="item"> <a href="#"><img src="../../assets/image/banners/banner3.png" alt="main-banner3" style="width: 100%; height: 60%;" alt="main-banner1" /></a> </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="cms_banner">
            <div class="col-xs-12 col-md-6">
                <div id="subbanner1" class="banner sub-hover">
                    <a href="#"><img src="../../assets/image/banners/subbanner1.png" alt="Sub Banner1" style="width: 575px; height: 300px;"></a>
                    <!-- <div class="bannertext">
                        <h2>wonem online</h2>
                        <p>Shop New Season Clothing</p>
                        <button class="btn">Shop Now</button>
                      </div> -->
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div id="subbanner2" class="banner sub-hover">
                    <a href="#"><img src="../../assets/image/banners/subbanner2.png" alt="Sub Banner2" style="width: 575px; height: 300px;"></a>
                    <!-- <div class="bannertext">
                        <h2>Accessories </h2>
                        <p>Get Wide Range Selection</p>
                        <button class="btn">Shop Now</button>
                      </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div id="center">
    <div class="container-fluid">
        <div class="row">
            <div class="content col-sm-12">
                <div class="customtab">
                    <h3 class="productblock-title">Dành cho sự phù hợp của bạn</h3>
                    <div id="tabs" class="customtab-wrapper">
                        <ul class='customtab-inner'>
                            <li class='tab'><a href="#tab-furnitur">Nổi bật</a></li>
                            <li class='tab'><a href="#tab-livin">Bán chạy nhất</a></li>
                            <li class='tab'><a href="#tab-kitche">Đặc biệt</a></li>
                            <li class='tab'><a href="#tab-outdoo">Sản phẩm mới</a></li>
                        </ul>
                    </div>
                </div>
                <!-- tab-furniture-->
                <div id="tab-furnitur" class="tab-content">
                    <div class="row">
                        <?php
                        foreach($products as $product) {
                            echo ' <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <div class="item">
                        <div class="product-thumb">
                          <div class="image product-imageblock">';
                            echo '<a href="product.html">';
                            echo "<img src=".$product->img." alt='iPod Classic' title='iPod Classic' class='img-responsive' />" ;
                            echo "<img src=".$product->img." alt='iPod Classic' title='iPod Classic' class='img-responsive' />";
                            echo '</a>';
                            echo '<ul class="button-group">
                            <li>
                              <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                            </li>
                            <li></li>
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
                      <p class='price product-price'>".$product->price." VND<span class='less'>$150.00</span><span class='price-tax'>Ex
                      Tax: $100.00</span></p>";
                            echo '</div>
                            </div>
                          </div>
                        </div>';
                        }

                        ?>
                        <div class="viewmore load_1">
                            <div id="load_more" class="btn">Xem thêm</div>
                        </div>
                    </div>
                </div>
                <!-- tab-living-->
                <div id="tab-livin" class="tab-content">
                    <div class="row">
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="../../assetsimage/product/product10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product10-10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="../../assets/image/product/product9.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="../../assets/image/product/product9-9.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="less">$150.00</span><span class="price-tax">Ex
                        Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"><a href="product.html"> <img src="../../assets/image/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="../../assets/image/product/product3-3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="../../assets/image/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="../../assets/image/product/product4-4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="../../assets/image/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="../../assets/image/product/product5-5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="../../assets/image/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="../../assets/image/product/product6-6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="../../assets/image/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="../../assets/image/product/product7-7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="../../assets/image/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="../../assets/image/product/product8-8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="viewmore">
                            <div class="btn">View More All Products</div>
                        </div>
                    </div>
                </div>
                <!-- tab-living-->
                <div id="tab-kitche" class="tab-content">
                    <div class="row">
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="../../assets/image/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="../../assets/image/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="../../assets/image/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="../../assets/image/product/product2-2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="less">$150.00</span><span class="price-tax">Ex
                        Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"><a href="product.html"> <img src="image/product/product10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product3-3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product4-4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product5-5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product9.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product6-6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product7-7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product8-8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="viewmore">
                            <div class="btn">View More All Products</div>
                        </div>
                    </div>
                </div>
                <!-- tab-decor-->
                <div id="tab-outdoo" class="tab-content">
                    <div class="row">
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product2-2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="less">$150.00</span><span class="price-tax">Ex
                        Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"><a href="product.html"> <img src="image/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product3-3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product4-4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product5-5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product6-6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product7-7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="product-thumb">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product8-8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <ul class="button-group">
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
                                                <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="caption product-detail">
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle
                                                Hem</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="viewmore">
                            <div class="btn">View More All Products</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="content col-sm-12">
            <div class="customtab">
                <h3 class="productblock-title">Sản phẩm nổi bật</h3>
                <h4 class="title-subline">Có gì đặc biệt ? Xem ngay</h4>
            </div>
            <div id="tab-furniture" class="tab-content">
                <div id="special-slidertab" class="row owl-carousel product-slider">
                    <?php
                    foreach ($foreigns as $foreign) {
                        echo '<div class="item">
              <div class="product-thumb">
              <div class="image product-imageblock"> 
              <a href="product.html">';
                        echo "<img src=".$foreign->img." alt='iPod Classic' title='iPod Classic' class='img-responsive' />";
                        echo "<img src=".$foreign->img." alt='iPod Classic' title='iPod Classic' class='img-responsive' />";
                        echo '</a>
              <ul class="button-group">
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
                  <button type="button" class="addtocart-btn" title="Add to Cart"> Add to Cart </button>
                </li>
              </ul>
            </div>
            <div class="caption product-detail">
              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>';
                        echo "<h4 class='product-name>
              <a href='#' title=".$foreign->product_name.">$foreign->product_name</a>
              </h4>";
                        echo "<p class='price product-price'>$foreign->price VND<span class='price-tax'>Ex Tax: $100.00</span></p>";
                        echo '</div>
              </div>
            </div>';
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="footer-top-cms parallax-container-fluid">
    <div class="parallax"><img src="image/news.jpg" alt="#"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="newslatter">
                <form>
                    <h5>ĐĂNG KÝ ĐỂ NHẬN ƯU ĐÃI NGAY HÔM NAY</h5>
                    <h4 class="title-subline">Hãy chắc rằng bạn đăng ký và nhận thông báo ưu đãi từ chúng tôi</h4>
                    <div class="input-group">
                        <input type="text" class=" form-control" placeholder="Your-email@website.com">
                        <button type="submit" value="Sign up" class="btn btn-large btn-primary">Theo dõi</button>
                    </div>
                </form>
            </div>
            <div class="footer-social">
                <ul>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <h3 class="client-title">Thương hiệu yêu thích</h3>
    <h4 class="title-subline">Sản phẩm chất lượng cao</h4>
    <div id="brand_carouse" class="owl-carousel brand-logo">
        <div class="item text-center"> <a href="#"><img src="image/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
        <div class="item text-center"> <a href="#"><img src="image/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
    </div>
</div>
<!-- Load more script -->
<script>
    window['from'] = 11;
    window['to'] = 12
    const loadBtn = document.getElementById("load_more");
    const row = $("#tab-furnitur .row")
    loadBtn.addEventListener("click", () => {
        $.get(`/?controller=load_more&from=${window['from']}&to=${window['to']}`, function(data, status) {
            row.prepend(data)
        })
        window['from'] = window['to'] + 1;
        window['to'] = window['to'] + 2
    })
</script>
