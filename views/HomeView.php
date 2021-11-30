<?php 
  //load file Layout.php vao day
  $this->fileLayout = "LayoutTrangChu.php";
 ?>
 <!-- collection banner start  -->
    <div class="collection-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="collection-style-01 margin-top-20">
                        <div class="thumb">
                            <img src="assets/fontend/img/collection/1.png" alt="">
                            <div class="content">
                                <h3>WOMEN</h3>
                                <h6>Collection</h6>
                                <a href="#">view collection</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="collection-style-01 margin-top-20">
                        <div class="thumb">
                            <img src="assets/fontend/img/collection/2.png" alt="">
                            <div class="content">
                                <h3>MEN</h3>
                                <h6>Collection</h6>
                                <a href="#">view collection</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="collection-style-01 margin-top-20">
                        <div class="thumb">
                            <img src="assets/fontend/img/collection/3.png" alt="">
                            <div class="content">
                                <h3>KIDS</h3>
                                <h6>Collection</h6>
                                <a href="#">view collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- collection area end  -->

    <!-- arrivals area start  -->
    <div class="arrivals-area margin-top-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>HOT PRODUCT</h3>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php 
                $hotProduct = $this->modelHotProduct();
               ?>
               <?php foreach($hotProduct as $rows): ?>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="product-style-01 margin-top-40">
                        <div class="thumb">
                            <div class="thumb-slider" style="height: 200px">
                                <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a>
                            </div>
                            <span class="sale">SALE! <?php echo $rows->discount; ?>%</span>
                            <ul class="cart-action">
                                <li><a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><i class="icon-add-to-cat"></i></a></li>
                                <li><a href="#"><i class="icon-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="content text-center">
                            <div class="content-hover d-flex justify-content-between">
                                <ul class="product-color">
                                    <li><a href="#"><span class="blue"></span></a></li>
                                    <li><a href="#"><span class="red"></span></a></li>
                                    <li><a href="#"><span class="pest"></span></a></li>
                                    <li><a href="#"><span class="yellow"></span></a></li>
                                    <li><a href="#"><span class="ass"></span></a></li>
                                </ul>
                                <ul class="product-size">
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">L</a></li>
                                </ul>
                            </div>
                            <div class="content-bottom">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-center margin-bottom-20">
                                    <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i class="fa fa-star"></i></a></li>
                                    <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><i class="fa fa-star"></i></a></li>
                                    <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><i class="fa fa-star"></i></a></li>
                                    <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><i class="fa fa-star"></i></a></li>
                                    <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><i class="fa fa-star"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h6>
                                <div class="content-price d-flex align-self-center justify-content-center">
                                    <span class="old-price"><?php echo number_format($rows->price); ?></span> ₫
                                    <span class="new-price"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?></span> ₫
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-wrapper text-center margin-top-55">
                        <a href="#" class="btn btn-more">Hiển thị thêm...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- arrivals area end  -->

    <!-- sale area start  -->
    <div class="sale-area padding-top-80">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">
                    <div class="sales-content" style="background: url('assets/fontend/img/others/sales.png') no-repeat center center/cover;">
                        <h2>SPRING SALE</h2>
                        <h6>30% off on selected items</h6>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-sales">SHOP THE SALE <i class="icon-arrow-buttom"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sale area end  -->

    <!-- tranding area start  -->
    <div class="tranding-area margin-top-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>TRANDING NOW</h3>
                    </div>
                </div>
            </div>
            <?php 
              $categories = $this->modelCategories();
             ?>
             <?php foreach($categories as $itemCategories): ?>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills tranding-tab">
                        <li class="mt-3"><a data-toggle="pill" href="#one" class="active"><?php echo $itemCategories->name; ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in show active">
                    <div class="row">
                      <?php 
                        $products = $this->modelProducts($itemCategories->id);
                       ?>
                       <?php foreach($hotProduct as $rows): ?>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40" >
                                <div class="thumb">
                                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" ><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive" style="height: 220px"></a>
                                    <span class="out">SOLD OUT</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i class="fa fa-star"></i></a></li>
                                        <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><i class="fa fa-star"></i></a></li>
                                        <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><i class="fa fa-star"></i></a></li>
                                        <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><i class="fa fa-star"></i></a></li>
                                        <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><i class="icon-add-to-cat"></i> Mua ngay</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price"><?php echo number_format($rows->price); ?></span>₫
                                            <span class="new-price"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?></span>₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- tranding area end  -->

    <!-- beauty area start  -->
    <div class="beauty-area padding-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="#">
                        <div class="beauty-content align-items-center d-flex">
                            <div class="beauty-left">
                                <h2>BEAUTY awaits within</h2>
                            </div>
                            <div class="beauty-right">
                                <h2>Hats</h2>
                                <h4>get up to 20% off</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- beauty area end  -->

    <!-- collection section start  -->
    <div class="collection-section padding-top-70 padding-bottom-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center margin-bottom-40">
                        <h3>Tin Tức</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="collection-slider">
                      <?php 
                        $news = $this->modelHotNews();
                       ?>
                       <?php foreach($news as $rows): ?>
                        <div class="collection-item">
                            <div class="thumb">
                                <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
                                <div class="thumb-content">
                                    <h3><a class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold; color: whitesmoke;"><?php echo $rows->name; ?></a></h3>
                                    <p class="desc"><?php echo $rows->description; ?></p>
                                </div>
                            </div>
                        </div>
                       <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- collection section end  -->


    <!-- article area start  -->
    <div class="article-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center margin-bottom-40">
                        <h3>LATEST ARTICLE</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="article-style-01">
                        <div class="thumb">
                            <img src="assets/fontend/img/blog/1.png" alt="">
                            <span class="tag">MODAL</span>
                        </div>
                        <div class="content">
                            <span class="date">June 24, 2020</span>
                            <h3><a href="#">Never putting your Cocktail down to leave</a></h3>
                            <p>It reopened this year following a refurb which aims to cement its place a surfer’s paradise. It now boasts two.</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="article-style-01">
                        <div class="thumb">
                            <img src="assets/fontend/img/blog/2.png" alt="">
                            <span class="tag">LIFESTYLE</span>
                        </div>
                        <div class="content">
                            <span class="date">June 24, 2020</span>
                            <h3><a href="#">7 Things You Can’t Wear After Labor Day Read</a></h3>
                            <p>Typography is the work of typesetters, compositors, typographers, graphic designers, art directors, manga</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="article-style-01">
                        <div class="thumb">
                            <img src="assets/fontend/img/blog/3.png" alt="">
                            <span class="tag">FASHION TRENDS</span>
                        </div>
                        <div class="content">
                            <span class="date">June 24, 2020</span>
                            <h3><a href="#">Never putting your Cocktail down to leave</a></h3>
                            <p>It reopened this year following a refurb which aims to cement its place a surfer’s paradise. It now boasts two.</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- article area end  -->