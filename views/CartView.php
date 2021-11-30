<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>

    <!-- cart area start  -->
    <div class="cart-area col-xl-9">
        <div class="container">
            <div class="row">
              
                <div class="col-xl-9 ">
                  <form action="index.php?controller=cart&action=update" method="post">
                    <div class="cart-content margin-top-20">
                        <table class="table table-bordered table-responsive">
                            <thead>
                              <tr class="text-center">
                                <th scope="col">Sẩn phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Thành tền</th>
                                <th scope="col">Xóa</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                                foreach($_SESSION['cart'] as $product):
                               ?>
                              <tr>
                                <th scope="row" class="d-flex" >
                                    <div class="left" >
                                        <img src="assets/upload/products/<?php echo $product["photo"]; ?>" alt="">
                                    </div>
                                    <div class="right">
                                        <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a>
                                    </div>
                                </th>
                                <td><?php echo number_format($product["price"]-($product["price"]*$product["discount"])/100); ?>₫ </td>
                                <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống"></td>
                                <td><p><b><?php echo number_format(($product["price"]-($product["price"]*$product["discount"])/100)*$product["number"]); ?>₫</b></p></td>
                                <td>
                                    <div class="action">
                                        <a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="btn-wrapper"> 
                            <input type="submit"  style=" border-radius:unset;  color: white; background-color: green; " value="Cập nhật">
                        </div>
                        <div class="d-flex justify-content-between margin-top-30">
                            <div class="btn-wrapper">
                                <a href="index.php" class="btn btn-continue">Tiếp tục mua hàng</a>
                            </div>
                            <div class="btn-wrapper">
                                <a href="index.php?controller=cart&action=destroy" class="btn btn-white ">Xóa toàn bộ</a>
                            </div>
                        
                        </div>
                        <?php if($this->cartNumber() > 0): ?>
                        <div class="total-cart"> Tổng tiền thanh toán:
                          <?php echo number_format($this->cartTotal()); ?>₫ <br>
                          <a href="index.php?controller=cart&action=checkout" class="btn btn-white">Thanh toán</a> </div>
                         <?php endif; ?>
                    </div>
                  </form>
                </div>
             
                <di class="col-xl-3 col-lg-4">
                    <div class="summary margin-top-20">
                        <h6 class="title">Người nhận</h6>
                        <h6 class="subtitle">Thông tin vận chuyển</h6>
                        <p class="destination">Nhập địa chỉ nhận hàng:</p>
                        <form action="#">
                            <div class="form-group">
                                <label>Tỉnh thành</label>
                                <select class="form-control cart-select">
                                    <option>Hà Nội</option>
                                    <option>Bắc Ninh</option>
                                    <option>Bắc Giang</option>
                                    <option>tp.HCM</option>
                                </select>
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="form-group">
                                <label>Quận/huyện</label>
                                <!-- <select class="form-control cart-select">
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select> -->
                                <input type="text">
                                
                            </div>
                            <div class="form-group">
                                <label>Phường/xã/Địa điểm cụ thể</label>
                                <input type="text">
                            </div>
                            <!-- <div class="form-group">
                                <label>Flat Rate</label>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                    <label class="custom-control-label" for="customCheck">Fixed: $5.00</label>
                                </div>
                            </div> 
                            <div class="d-flex justify-content-between total">
                                <p>Subtotal</p>
                                <p>$190.00</p>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Shipping</p>
                                <p>$190.00</p>
                            </div>
                            <div class="d-flex justify-content-between total">
                                <p>Order Total</p>
                                <p>$190.00</p>
                            </div> -->
                            <div class="form-group margin-top-20">
                                <label>Áp dụng mã giảm giá</label>
                                <input type="text" placeholder="nhập mã giảm giá">
                            </div>
                        </form> 
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-checkout">Tiến hành kiểm tra</a>
                        </div>
                        <h6 class="subtitle text-center">Thanh toán với nhiều địa chỉs</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart area end  -->
    <style type="text/css">
      .total-cart{
        font-weight: bold;
        font-size: xx-large;
      }
      .btn-white{
        border: solid 2px;
        font-weight: bold;
      }
    </style>