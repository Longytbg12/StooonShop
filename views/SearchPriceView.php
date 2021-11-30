<?php 
  //load file Layout.php vao day
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>

 <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-lg-8 col-5">
            <ul class="nav nav-pills shop-tab">
                <li><a data-toggle="pill" href="#one" class="active"><i class="fa fa-th-large"></i></a></li>
                <li><a data-toggle="pill" href="#two"><i class="fa fa-bars"></i></a></li>
            </ul>
        </div>
    </div>
    <h3>
      Giá từ <?php echo number_format($fromPrice); ?> VNĐ - đến <?php echo number_format($toPrice); ?> VNĐ
    </h3>
    <div class="tab-content">
        <div class="tab-pane fade in show active" id="one">
            <div class="row">
              <?php foreach($data as $rows): ?>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="product-style-03 margin-top-40">
                        <div class="thumb">
                            <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a>
                            <ul class="cart-action">
                                <li><a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><i class="icon-add-to-cat"></i></a></li>
                                <li><a href="#"><i class="icon-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="content text-center">
                            <span class="brand">Brand: geek</span>
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
              <?php endforeach; ?>
            </div>
        </div>
        <div class="tab-pane fade list-item" id="two">
          <?php foreach($data as $rows): ?>
            <div class="row product-style-03 margin-top-40">
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="thumb">
                      <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a>
                    </div>                                        
                </div>
                <div class="col-md-8 col-sm-12 col-12">
                    <div class="content">
                        <h6 class="title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h6>
                        <div class="content-price d-flex align-self-center">
                          <span class="old-price"><?php echo number_format($rows->price); ?></span> ₫
                          <span class="new-price"><?php echo number_format($rows->price - ($rows->price * $rows->discount)/100); ?></span> ₫
                        </div>
                        <ul class="margin-bottom-10">
                            <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i class="fa fa-star"></i></a></li>
                              <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><i class="fa fa-star"></i></a></li>
                              <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><i class="fa fa-star"></i></a></li>
                              <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><i class="fa fa-star"></i></a></li>
                              <li><a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><i class="fa fa-star"></i></a></li>
                        </ul>
                        <p>Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <div class="btn-wrapper margin-top-20">
                            <div class="add-to-cart">
                                <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><i class="icon-add-to-cat"></i>Thêm vào giỏ hàng</a>
                            </div>
                            <!-- <div class="add-to-wishlist">
                                <a href="#"><i class="icon-heart"></i> Add to Wishlist</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between pagination">
                <h6>Trang</h6>
                <ul>
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                      <li class="page-item"><a class="page-link" href="index.php?controller=search&action=price&fromPrice=<?php echo $fromPrice; ?>&toPrice=<?php echo $toPrice; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
</div>