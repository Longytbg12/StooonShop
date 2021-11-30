
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <div  class="search-form" >
            <div class="form-group">
                <input type="text" class="form-control input-control" id="key" placeholder="Search....." autocomplete="off" value="" >
            </div>
            <button type="button" class="submit-btn"><i class="fa fa-search" id="btnSearch"></i></button>
            <div class="smart-search">
              <ul>
                <li><img src="http://localhost/devpro/php57/TH/assets/fontend/img/seller/1.png"> <a href="#">Sản phẩm 1</a></li>
                <li><img src="http://localhost/devpro/php57/TH/assets/fontend/img/seller/1.png"> <a href="#">Sản phẩm 1</a></li>
                <li><img src="http://localhost/devpro/php57/TH/assets/fontend/img/seller/1.png"> <a href="#">Sản phẩm 1</a></li>
              </ul>
            </div>
        </div>
    </div>
    <!-- search Popup end -->
    <style type="text/css">
      .smart-search{position: absolute; width: 100%; background: white; height: 350px; overflow: scroll; z-index: 1; display: none; }
      .smart-search ul{padding: 0px; margin: 0px; list-style: none;}
      .smart-search img{width: 70px; margin-right: 5px;}

      .search-form{margin-top: 50px;}
    </style>
    <script type="text/javascript">
      //tinh nang nay phai dung ket hop voi jquery -> phai load thu vien jquery
      $(document).ready(function(){
        //bat su kien click cua id=btnSearch
        $("#btnSearch").click(function(){
          var key = $("#key").val();
          //di chuyen den url tim kiem
          location.href="index.php?controller=search&action=name&key="+key;
        });
        //---
        $(".input-control").keyup(function(){
          var strKey = $("#key").val();
          if(strKey.trim() == "")
            $(".smart-search").attr("style","display:none");
          else{
            $(".smart-search").attr("style","display:block");
            //---
            //su dung ajax de lay du lieu
            $.get("index.php?controller=search&action=ajaxSearch&key="+strKey,function(data){
              //clear cac the li ben trong the ul
              $(".smart-search ul").empty();
              //them du lieu vua lay duoc bang ajax vao the ul
              $(".smart-search ul").append(data);
            });
            //---
          }
        });
        //---
      });
    </script>
    
    <!--sidebar menu start-->
    <div class="sidebar-menu" id="sidebar-menu">
        <button class="sidebar-menu-close">X</button>
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <img src="assets/fontend/img/logo.png" alt="">
            </div>
            <div class="sidemenu-text">
                <p>We believe brand interaction is key in commu- nication. Real inno vations and a positive customer experience are the heart of successful commu- nication.</p>
            </div>
            <div class="sidebar-contact">
                <h4>Contact Us</h4>
                <ul>
                    <li><i class="fa fa-map-marker"></i>Lavaca Street, Suite 2000</li>
                    <li><i class="fa fa-envelope"></i>email@evha.com</li>
                    <li><i class="fa fa-phone"></i>(+880) 172570051</li>
                </ul>
            </div>
            <div class="sidebar-subscribe">
                <input type="text" placeholder="Email">
                <button><i class="fa fa-long-arrow-right"></i></button>
            </div>
            <div class="social-link">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--sidebar menu end-->

    <!-- navbar start -->
    <div class="stoon-navbar">
        <div class="header-top d-none d-sm-block">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-8">
                        <div class="contact">
                            <a href="tel:+496170961709"><i class="icon-call-header"></i> (939) 353-1107</a>
                            <a href="#"><i class="icon-email-subscribe"></i> support@example.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="shipping text-center">
                            <p>Miễn phí vận chuyển -<span>tất cả đơn hàng trên 500.000đ</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-4">
                        <div class="social">
                            <ul class="nav-social justify-content-end">
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                                <li><a href="#"><i class="icon-pinterest"></i></a></li>
                                <li><a href="#"><i class="icon-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-area navbar-expand-lg nav-style-01">
            <div class="container-fluid nav-container">
                <div class="row">
                    <div class="col-lg-3 col-4 order-1 align-self-center">
                        <div class="logo">
                            <a href="index.php"><img src="assets/fontend/img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-3 order-lg-2">
                        <div class="collapse navbar-collapse" id="shop-menu">
                            <ul class="navbar-nav menu-open">
                                <li class="menu-item-has-children">
                                    <a href="index.php">Trang chủ <!-- <i class="fa fa-angle-down"></i> --></a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                        <li><a href="index-4.html">Home 04</a></li>
                                        <li><a href="index-5.html">Home 05</a></li>
                                    </ul> -->
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Sản Phẩm <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <?php 
                                          //co the truy van truc tiep csdl va lay thong tin ra de hien thi o day
                                          $db = Connection::getInstance();
                                          $query = $db->query("select * from categories where parent_id=0 order by id desc");
                                          $categories = $query->fetchAll();
                                         ?>
                                         <?php foreach($categories as $rows): ?>
                                        <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
                                            <?php 
                                              $querySub = $db->query("select * from categories where parent_id={$rows->id} order by id desc");
                                              $categoriesSub = $querySub->fetchAll();
                                             ?>
                                           <?php foreach($categoriesSub as $rowsSub): ?>
                                            <li style="padding-left:20px;"><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>    
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.php?controller=cart">Giỏ hàng<i class="fa fa-angle-down"></i></a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="shoping-cart.html">Shoping Cart</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="error.html">Error</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="index.php?controller=news">Tin tức</a></li>
                                <li><a href="index.php?controller=contact">Liên Hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-8 justify-content-end d-flex order-2 order-lg-3">
                        <div class="nav-right-part">
                            <ul>
                                <li>
                                    <a href="SearchNameView.php" id="search"><i class="icon-search"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-heart"></i><span class="badge">2</span></a>
                                </li>
                                <?php 
                                  $ProductNumberCart = 0;
                                  if(isset($_SESSION['cart']))
                                    foreach($_SESSION['cart'] as $product)
                                      $ProductNumberCart++;
                                 ?>
                                <li class="has-dropdown">
                                    <a href="index.php?controller=cart"><i class="icon-add-to-cat"></i><span class="badge"><?php echo $ProductNumberCart; ?></span></a>
                                    <ul>
                                        <div class="btn-wrapper">
                                                <a href="index.php?controller=cart" class="btn btn-cart">Giỏ hàng</a>
                                            </div>
                                        <?php if(isset($_SESSION['cart'])): ?>
                                            <?php foreach($_SESSION['cart'] as $product): ?>
                                        <li>
                                            <div class="d-flex">
                                                <div class="thumb">
                                                    <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"> <img alt="<?php echo $product["name"]; ?>" src="assets/upload/products/<?php echo $product["photo"]; ?>" title="<?php echo $product["name"]; ?>" class="img-responsive"> </a>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title"><a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a></h6>
                                                    <span class="price"><?php echo number_format($product["price"]); ?>₫</span>
                                                </div>
                                                <div class="action">
                                                    <input type="number" value="<?php echo $product["number"]; ?>">
                                                    <a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" class="remove">Remove</a>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <li>
                                            <!-- <h6 class="tprice"><span>Total price: </span>$3210.00</h6> -->
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-user"></i></a>
                                    <ul class="user-dropdown">
                                        
                                        <?php if(isset($_SESSION["customer_email"])): ?>
                                        <li><a href="#"><i class="icon-user"></i><?php echo $_SESSION["customer_email"]; ?></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-briefcase"></i> My Orders</a></li> -->
                                        <li><a href="index.php?controller=account&action=logout"><i class="fa fa-reply"></i>Đăng xuất</a></li>
                                        <!-- <li><a href="#"><i class="fa fa-commenting-o"></i> Contact Preferences</a></li> -->
                                        <?php else: ?>
                                        <li><a href="index.php?controller=account&action=login">Đăng nhập</a></li>
                                        <li><a href="index.php?controller=account&action=register">Đăng ký</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a href="#" id="navigation-button"><i class="icon-bar-icon"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="responsive-mobile-menu">
                            <div class="menu toggle-btn d-block d-lg-none" data-toggle="collapse" data-target="#shop-menu" aria-expanded="false" role="button">
                                <div class="icon-left"></div>
                                <div class="icon-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end-->
    