<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="template-customer col-xl-9" style=" padding-left: 20px;">
          <img style="padding:30px 0;" src="assets/fontend/img/logo.png" alt="">
          <?php if(isset($_GET["notify"])&&$_GET["notify"]=="error"): ?>
          <p style="color:red;">Đăng ký chưa thành công, bạn hãy kiểm tra lại thông tin!</p>
          <?php else: ?>
          <p> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
          <?php endif; ?>
        
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <form method='post' action="index.php?controller=account&action=registerPost">
                  <p class="title"><span>Đăng ký tài khoản</span></p>
                  <div class="form-group">
                    <label>Họ và tên:</label><br>
                    <input type="text" style=" width: 100%;" name="name" class="input-control">
                  </div>
                  <div class="form-group">
                    <label>Email:<b id="req" style="color: red;">*</b></label><br>
                    <input type="text" style=" width: 100%;" name="email" class="input-control" required>
                  </div>
                  <div class="form-group">
                    <label>Địa chỉ:</label><br>
                    <input type="text" style=" width: 100%;" name="address" class="input-control">
                  </div>
                  <div class="form-group">
                    <label>Điện thoại:</label><br>
                    <input type="text" style=" width: 100%;" name="phone" class="input-control">
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu:<b id="req" style="color: red;">*</b></label><br>
                    <input type="password" style=" width: 100%;" name="password" class="input-control" required="">
                  </div>
                  <div class="form-group" style="text-align: center;">
                    <input type="submit"  class="button" value="Đăng ký" style=" background-color: lightgreen;">
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapper-form">
                <p class="title"><h3>Đăng nhập</h3></p>
                <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
                <a href="index.php?controller=account&action=login" class="button" style=" background-color: gray; border: solid 2px; border-radius: 5px;">Đăng nhập</a> </div>
            </div>
          </div>
        </div>