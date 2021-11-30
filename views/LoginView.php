<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="template-customer col-xl-9" style=" padding-left: 20px;">
          
          <img style="padding-top:30px;" src="assets/fontend/img/logo.png" alt="">
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <form method='post' action="index.php?controller=account&action=loginPost">
                  <p class="title"><span>Đăng nhập tài khoản</span></p>
                  <div class="form-group">
                    <label>Email:<b id="req" style="color: red;">*</b></label><br>
                    <input type="email" style=" width: 100%;" class="input-control" name="email" required="">
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu:<b id="req" style="color: red;">*</b></label><br>
                    <input type="password" style=" width: 100%;" class="input-control" name="password" required="">
                  </div>
                  <div style="text-align: center;">
                  <input type="submit"  class="button" value="Đăng nhập">
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapper-form">
                <p class="title"><h3>Tạo tài khoản mới</h3></p>
                <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
                <a href="index.php?controller=account&action=register" class="button" style=" background-color: gray; border: solid 2px; border-radius: 5px;" >Đăng ký</a> </div>
            </div>
          </div>
        </div>