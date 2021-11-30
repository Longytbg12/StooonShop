<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from zwin.io/html/stooon/collection.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Sep 2021 17:10:42 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stooon - Fashion eCommerce HTML Template</title>
    <!-- favicon -->
    <link rel=icon href=assets/fontend/img/favicon.png sizes="20x20" type="image/png">
    <!-- Vendor Stylesheet -->
    <link rel="stylesheet" href="assets/fontend/css/vendor.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/fontend/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/fontend/css/responsive.css">
    <script src='assets/fontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='assets/fontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
</head>
<body>

    <!-- plugin chat -->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/618784ea6885f60a50baab7c/1fjsludf8';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <!--  --> 


    <!-- header -->
    <?php include "views/HeaderView.php"; ?>
    <!-- end header -->


    <!-- breadcrumb start  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-inner d-flex justify-content-between">
                        <h2 class="page-title">Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end  -->
  <!-- collection area start  -->
    <div class="collection-area margin-top-60">
        <div class="container">
            <div class="row"> <!--flex-row-reverse-->

                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12 margin-top-20">
                    <div class="widget search-widget">
                        <form action="#">
                            <button type="submit"><i class="icon-search"></i></button>
                            <input type="text" placeholder="Tìm kiếm hãng" name="search">
                        </form>
                    </div>
                    
                    <div class="widget ptype-widget">
                        <div class="accordion-style-2" id="accordionExample3">
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Sản phẩm</a>
                                    </p>
                                </div>
                                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample3">
                                    <div class="card-body">
                                        <form action="#">
                                            <ul class="sub-menu">
                                                <?php 
                                                  //co the truy van truc tiep csdl va lay thong tin ra de hien thi o day
                                                  $db = Connection::getInstance();
                                                  $query = $db->query("select * from categories where parent_id=0 order by id desc");
                                                  $categories = $query->fetchAll();
                                                 ?>
                                                 <?php foreach($categories as $rows): ?>
                                                <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
                                                    <!--  -->
                                                <hr>
                                                <?php endforeach; ?>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget price-widget">
                        <div class="accordion-style-2" id="accordionExample4">
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Tìm theo mức giá</a>
                                    </p>
                                </div>
                                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample4">
                                    <div class="price_filter">
                                        <div class="price_slider_amount">
                                            <ul class="list-group" style="border:0px;">
                                              <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                                                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
                                              </li>
                                              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
                                              </li>
                                              <li class="list-group-item" style="border:0px; text-align:center">
                                                <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=price&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                                              </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget color-widget">
                        <div class="accordion-style-2" id="accordionExample5">
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Tìm theo mức giá</a>
                                    </p>
                                </div>
                                <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample5">
                                    <ul class="list-group" style="border:0px;">
                                      <li class="list-group-item" style="border:0px;">
                                        <input type="checkbox" id="gia1" onclick="location.href='index.php?controller=search&action=price&fromPrice=0&toPrice=2000000';"> <label for="gia1">Dưới 2 triệu</label>
                                      </li>
                                      <li class="list-group-item" style="border:0px;">
                                        <input type="checkbox" id="gia2" onclick="location.href='index.php?controller=search&action=price&fromPrice=2000000&toPrice=4000000';"> <label for="gia2">Từ 2 triệu đến 4 triệu</label>
                                      </li>
                                      <li class="list-group-item" style="border:0px;">
                                        <input type="checkbox" id="gia3" onclick="location.href='index.php?controller=search&action=price&fromPrice=4000000&toPrice=6000000';"> <label for="gia2">Từ 4 triệu đến 6 triệu</label>
                                      </li>
                                      <li class="list-group-item" style="border:0px;">
                                        <input type="checkbox" id="gia4" onclick="location.href='index.php?controller=search&action=price&fromPrice=6000000&toPrice=8000000';"> <label for="gia4">Từ 6 triệu đến 8 triệu</label>
                                      </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget size-widget">
                        <div class="accordion-style-2" id="accordionExample6">
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <p class="mb-0">
                                        <a href="#" role="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">Size</a>
                                    </p>
                                </div>
                                <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample6">
                                    <div class="card-body">
                                        <ul class="size-list">
                                            <li><a href="#">38</a></li>
                                            <li><a href="#">39</a></li>
                                            <li><a href="#">40</a></li>
                                            <li><a href="#">41</a></li>
                                            <li><a href="#">42</a></li>
                                            <li><a href="#">43</a></li>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">X</a></li>
                                            <li><a href="#">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="widget seller-widget">
                        <h4 class="widget-title">Best sellers</h4>
                        <div class="seller-content">
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    <img src="assets/fontend/img/seller/1.png" alt="">
                                </div>
                                <div class="content">
                                    <h6>Men's Crew T-shirt</h6>
                                    <span>$35.00</span>
                                </div>
                            </div>
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    <img src="assets/fontend/img/seller/2.png" alt="">
                                </div>
                                <div class="content">
                                    <h6>Men's V-neck Pima</h6>
                                    <span>$35.00</span>
                                </div>
                            </div>
                            <div class="single-seller-content d-flex">
                                <div class="thumb">
                                    <img src="assets/fontend/img/seller/3.png" alt="">
                                </div>
                                <div class="content">
                                    <h6>Men's Crew T-shirt</h6>
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="widget">
                        <a href="#"><img src="assets/fontend/img/others/add1.png" alt=""></a>
                    </div>
                </div>
                <!-- Load View -->
                <?php echo $this->view; ?>
                <!-- Load View -->
            </div>
        </div>
    </div>
    <!-- collection area end  -->


    <!-- footer -->
    <?php include "views/FooterView.php"; ?>
    <!-- end footer -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- all plugins here -->
    <script src="assets/fontend/js/vendor.js"></script>
    <!-- main js  -->
    <script src="assets/fontend/js/main.js"></script>
    <script src='assets/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
    <script src='assets/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
    <script src='assets/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
    <script src='assets/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
    <script src='assets/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
    
</body>

<!-- Mirrored from zwin.io/html/stooon/collection.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Sep 2021 17:13:22 GMT -->
</html>