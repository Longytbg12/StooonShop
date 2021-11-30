<?php 
  //load file Layout.php vao day
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>

 <!-- collection area start  -->
<div class="collection-area col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="slider-tabfor margin-top-20">
                            <div class="single-item">
                                <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
                            </div>
                            <div class="single-item">
                                <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
                            </div>
                            <div class="single-item">
                                <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
                            </div>
                            <div class="single-item">
                                <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
                            </div>
                            <div class="single-item">
                                <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
                            </div>
                        </div>
                        <div class="slider-tabnav">
                            <div class="single-item">
                                <div class="img">
                                    <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="img">
                                    <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="img">
                                    <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="img">
                                    <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="img">
                                    <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="img">
                                    <img src="assets/upload/products/<?php echo $record->photo; ?>" style="width: 100%;" class="img-responsive"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="content-part margin-top-20">
                            <h3 class="name"><?php echo $record->name; ?></h3>
                            <p class="specifications"> Sản phẩm:&nbsp; <b> 
                                <?php 
                                    $category = $this->getCategory($record->category_id);
                                    echo isset($category->name) ? $category->name : "";
                                 ?>
                               </b>
                             </p> 
                            <p class="price">
                              <span class="special-price"> <span class="old-price" style="text-decoration:line-through;"> <?php echo number_format($record->price); ?>₫ </span></span>
                              <span class="special-price"> <span class="new-price"> <?php echo number_format($record->price - $record->price * $record->discount/100); ?>₫ </span></span>
                            </p>
                            
                            
                            <!-- rating -->
                            <div style="border:1px solid #dddddd; margin-top: 15px;">
                              <h4 style="padding-left: 10px;">Rating</h4>
                              <table style="width: 100%;">
                                <tr>
                                  <td style="width: 80%; padding-left: 10px;"><i class="fa fa-star"></i></td>
                                  <td><span class="label label-primary"><?php echo $this->modelGetStar($record->id,1); ?> vote</span></td>
                                </tr>
                                <tr>
                                  <td style="width: 80%; padding-left: 10px;"><i class="fa fa-star"></i> <i class="fa fa-star"></i></td>
                                  <td><span class="label label-warning"><?php echo $this->modelGetStar($record->id,2); ?> vote</span></td>
                                </tr>
                                <tr>
                                  <td style="width: 80%; padding-left: 10px;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></td>
                                  <td><span class="label label-danger"><?php echo $this->modelGetStar($record->id,3); ?> vote</span></td>
                                </tr>
                                <tr>
                                  <td style="width: 80%; padding-left: 10px;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></td>
                                  <td><span class="label label-info"><?php echo $this->modelGetStar($record->id,4); ?> vote</span></td>
                                </tr>
                                <tr>
                                  <td style="width: 80%; padding-left: 10px;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></td>
                                  <td><span class="label label-success"><?php echo $this->modelGetStar($record->id,5); ?> vote</span></td>
                                </tr>
                              </table>
                              <br>
                            </div>
                            <!-- /rating -->    
                            
                            <!-- <span class="review-text">3 reviews</span>
                            <p class="specifications">SKU: <b>0014</b></p>
                            <p class="specifications">VENDOR: <b>Geek</b></p>
                            <p class="specifications">AVAILABILITY: <b class="color-green">In Stock</b></p> -->
                            <div class="d-flex">
                                <span class="specifications">Size: </span>
                                <ul class="size-list align-self-center pl-3">
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">X</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XS</a></li>
                                </ul>
                            </div>
                            <div class="d-flex">
                                <span class="specifications">Màu sắc: </span>
                                <ul class="color-list align-self-center">
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                            <p class="specifications">Chất liệu: Cotton, Wool, Silk</p>
                            <div class="btn-wrapper d-flex">
                                <!-- <div class="input-group">
                                    <div class="input-group-prepend align-self-center">
                                        <a class="btn btn-sm" id="minus-btn"><i class="fa fa-minus"></i></a>
                                    </div>
                                    <input type="number" id="qty_input" class="form-control text-right form-control-sm" value="1" min="1">
                                    <div class="input-group-prepend align-self-center">
                                        <a class="btn btn-sm" id="plus-btn"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div> -->
                                <div class="add-to-cart">
                                    <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>"><i class="icon-add-to-cat"></i> Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-buy">Mua hàng</a>
                            </div>
                            <div class="d-flex">
                                <span class="specifications">Chia sẻ:</span>
                                <ul class="social-list">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-tab">
                            <ul class="nav nav-pills">
                              <li><a data-toggle="pill" href="#home" class="active">NEWS</a></li>
                              <!-- <li><a data-toggle="pill" href="#menu1">ADITIONAL INFORMATION</a></li>
                              <li><a data-toggle="pill" href="#menu2">SHIPPING</a></li>
                              <li><a data-toggle="pill" href="#menu3">WHY BUY FROM US</a></li>
                              <li><a data-toggle="pill" href="#menu4">REVIEWS</a></li> -->
                            </ul>
                            
                            <div class="tab-content">
                              <div id="home" class="tab-pane fade in show active">
                                <?php echo $record->description; ?>
                                <?php echo $record->content; ?>
                                <!-- chi tiet -->
                              </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="widget delivery-widget margin-top-20">
                    <div class="single-delivery-item">
                        <div class="d-flex">
                            <i class="icon-delivery-car"></i>
                            <h4>Giao hàng</h4>
                        </div>
                        <span>Miễn phí vận chuyển - với đơn hàng trên 500.000đ</span>
                    </div>
                    <div class="single-delivery-item">
                        <div class="d-flex">
                            <i class="icon-phone-support"></i>
                            <h4>Hỗ trợ 24/7</h4>
                        </div>
                        <span>Hỗ trợ liên tục 24h / tất cả các ngày trong tuần </span>
                    </div>
                    <div class="single-delivery-item">
                        <div class="d-flex">
                            <i class="icon-money-back"></i>
                            <h4>Bảo hành</h4>
                        </div>
                        <span>Đổi trả hàng(hoàn tiền) trong vòng 30 ngày</span>
                    </div>
                </div>
                <div class="widget checkout-widget">
                    <h4 class="widget-title">GUARANTED SAFE CHECKOUT</h4>
                    <ul class="checkout-list">
                        <li><a href="#"><img src="assets/img/payment/p1.png" alt=""></a></li>
                        <li><a href="#"><img src="assets/img/payment/p2.png" alt=""></a></li>
                        <li><a href="#"><img src="assets/img/payment/p3.png" alt=""></a></li>
                        <li><a href="#"><img src="assets/img/payment/p4.png" alt=""></a></li>
                        <li><a href="#"><img src="assets/img/payment/p5.png" alt=""></a></li>
                        <li><a href="#"><img src="assets/img/payment/p6.png" alt=""></a></li>
                        <li><a href="#"><img src="assets/img/payment/p7.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="widget">
                    <a href="#"><img src="assets/img/others/add1.png" alt=""></a>
                </div>
                <div class="widget seller-widget">
                    <h4 class="widget-title">Top Products</h4>
                    <div class="seller-content">
                        <div class="single-seller-content d-flex">
                            <div class="thumb">
                                <img src="assets/img/seller/1.png" alt="">
                            </div>
                            <div class="content">
                                <h6>Men's Crew T-shirt</h6>
                                <span>$35.00</span>
                            </div>
                        </div>
                        <div class="single-seller-content d-flex">
                            <div class="thumb">
                                <img src="assets/img/seller/2.png" alt="">
                            </div>
                            <div class="content">
                                <h6>Men's V-neck Pima</h6>
                                <span>$35.00</span>
                            </div>
                        </div>
                        <div class="single-seller-content d-flex">
                            <div class="thumb">
                                <img src="assets/img/seller/3.png" alt="">
                            </div>
                            <div class="content">
                                <h6>Men's Crew T-shirt</h6>
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- collection area end  -->

